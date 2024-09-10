// // Import FilePond and its plugins
// import FilePond from 'filepond';
// import 'filepond/dist/filepond.css'; // Import FilePond styles
// import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
// import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css'; // Import plugin styles

// // Register the image preview plugin
// FilePond.registerPlugin(FilePondPluginImagePreview);

// // Create a FilePond instance
// FilePond.create(document.querySelector('input[id="image"]'), {
//     server: {
//         process: {
//             url: '/upload/image', // Adjust URL as needed
//             method: 'POST',
//             headers: {
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             },
//         },
//         revert: null,
//         restore: null,
//         load: null,
//         fetch: null,
//     },
//     allowImagePreview: true,
//     imagePreviewHeight: 170,
//     credits: false
// });
