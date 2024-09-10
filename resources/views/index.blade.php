<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filepond</title>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

</head>

<body>
    <form method="POST" action="{{ route('store.image') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" id="image" />
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <script>
        // Register the image preview plugin
        FilePond.registerPlugin(FilePondPluginImagePreview);

        // Create a FilePond instance
        FilePond.create(document.querySelector('input[id="image"]'), {
            server: {
                process: {
                    url: '{{ route('upload.image') }}',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                },
                revert: null,
                restore: null,
                load: null,
                fetch: null,
            },
            allowImagePreview: true,
            imagePreviewHeight: 170,
            credits: false
        });
    </script>
</body>

</html>
