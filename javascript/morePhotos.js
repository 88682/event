function handleFileSelect(event) {
    const fileInput = event.target;

    if (fileInput.files.length > 0) {
        for (let i = 0; i < fileInput.files.length; i++) {
            const selectedFile = fileInput.files[i];

            console.log('Uploading file:', selectedFile.name);
        }
    }
}
