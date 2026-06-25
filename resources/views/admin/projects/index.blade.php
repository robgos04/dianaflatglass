<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Projects | Diana Flat Glass</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { background: #f4f6f9; }
        .sidebar {
            min-height: 100vh;
            background: #1a1a2e;
            padding: 20px 0;
            width: 220px;
            position: fixed;
        }
        .sidebar-logo {
            padding: 0 20px 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 20px;
        }
        .sidebar-logo img { width: 140px; }
        .sidebar a {
            display: block;
            padding: 12px 20px;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s;
        }
        .sidebar a:hover, .sidebar a.active {
            background: rgba(255,255,255,0.08);
            color: #ffffff;
            padding-left: 28px;
        }
        .sidebar a i { width: 20px; margin-right: 8px; }
        .main-content {
            margin-left: 220px;
            padding: 30px;
        }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        .page-header h1 { font-size: 1.6rem; font-weight: 700; margin: 0; }
        .table-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            overflow: hidden;
        }
        .table thead th {
            background: #1a1a2e;
            color: #fff;
            border: none;
            font-weight: 500;
            padding: 14px 16px;
        }
        .table tbody td {
            padding: 12px 16px;
            vertical-align: middle;
        }
        .table tbody tr:hover { background: #f8f9fa; }
        .project-thumb {
            width: 80px;
            height: 55px;
            object-fit: cover;
            border-radius: 6px;
        }
        .badge-exterior { background: #2196F3; color: #fff; }
        .badge-interior { background: #4CAF50; color: #fff; }
        .badge-aluminium { background: #FF9800; color: #fff; }
        .badge-cat {
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.78rem;
            font-weight: 600;
            text-transform: capitalize;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-logo">
        <img src="{{ asset('/images/diana_logo.png') }}" alt="Diana Glass">
    </div>
    <a href="{{ route('admin.projects.index') }}" class="active">
        <i class="fas fa-images"></i> Projects
    </a>
</div>

<div class="main-content">
    <div class="page-header">
        <h1>Projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-dark">
            <i class="fas fa-plus"></i> Add Project
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    @endif

    {{-- Filter by category --}}
    <div class="mb-3">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm {{ !request('category') ? 'btn-dark' : 'btn-outline-dark' }}">All</a>
        <a href="{{ route('admin.projects.index', ['category' => 'exterior']) }}" class="btn btn-sm {{ request('category') == 'exterior' ? 'btn-primary' : 'btn-outline-primary' }}">Exterior</a>
        <a href="{{ route('admin.projects.index', ['category' => 'interior']) }}" class="btn btn-sm {{ request('category') == 'interior' ? 'btn-success' : 'btn-outline-success' }}">Interior</a>
        <a href="{{ route('admin.projects.index', ['category' => 'aluminium']) }}" class="btn btn-sm {{ request('category') == 'aluminium' ? 'btn-warning' : 'btn-outline-warning' }}">Aluminium</a>
    </div>

    <div class="table-card">
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Project Name</th>
                    <th>Category</th>
                    <th>Added</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('images/projects/' . $project->projectpic) }}"
                             alt="{{ $project->projectname }}"
                             class="project-thumb">
                    </td>
                    <td>{{ $project->projectname }}</td>
                    <td>
                        <span class="badge-cat badge-{{ $project->category }}">
                            {{ ucfirst($project->category) }}
                        </span>
                    </td>
                    <td>{{ $project->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project->id) }}"
                           class="btn btn-sm btn-outline-dark">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.projects.destroy', $project->id) }}"
                              method="POST" style="display:inline;"
                              onsubmit="return confirm('Delete this project?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-4">No projects yet.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>