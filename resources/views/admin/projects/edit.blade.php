<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project | Diana Flat Glass</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { background: #f4f6f9; }
        .form-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.06);
            padding: 30px;
            max-width: 600px;
            margin: 40px auto;
        }
        .form-card h2 { font-size: 1.4rem; font-weight: 700; margin-bottom: 24px; }
        .current-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        .preview-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            display: none;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="form-card">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-outline-dark mr-3">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h2 class="mb-0">Edit Project</h2>
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Project Name</label>
                <input type="text" name="projectname" class="form-control"
                       value="{{ old('projectname', $project->projectname) }}">
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category" class="form-control">
                    <option value="exterior" {{ $project->category == 'exterior' ? 'selected' : '' }}>Exterior Glass</option>
                    <option value="interior" {{ $project->category == 'interior' ? 'selected' : '' }}>Interior Glass</option>
                    <option value="aluminium" {{ $project->category == 'aluminium' ? 'selected' : '' }}>Aluminium</option>
                </select>
            </div>

            <div class="form-group">
                <label>Current Image</label>
                <img src="{{ asset('images/projects/' . $project->projectpic) }}"
                     alt="{{ $project->projectname }}" class="current-img">
                <label>Change Image <small class="text-muted">(leave empty to keep current)</small></label>
                <input type="file" name="projectpic" class="form-control-file"
                       accept="image/*" onchange="previewImage(this)">
                <img id="preview" class="preview-img" src="" alt="Preview">
            </div>

            <button type="submit" class="btn btn-dark btn-block mt-3">
                <i class="fas fa-save"></i> Update Project
            </button>
        </form>
    </div>
</div>

<script>
function previewImage(input) {
    var preview = document.getElementById('preview');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
</body>
</html>