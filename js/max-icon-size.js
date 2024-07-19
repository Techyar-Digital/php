<script>
function validateFileSize(input) {
    const maxSize = 1048576; // 1MB in bytes
    if (input.files && input.files[0]) {
        const fileSize = input.files[0].size; // File size in bytes
        if (fileSize > maxSize) {
            alert("File size exceeds the limit of 1MB.");
            input.value = ''; // Clear the file input
        }
    }
}
</script>
