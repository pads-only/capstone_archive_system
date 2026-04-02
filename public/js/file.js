//js for file preview

const fileInput = document.getElementById('fileInput');
const fileName = document.getElementById('fileName');

if (fileName.textContent.trim() === '') {
    fileName.style.display = 'none'
}


fileInput.addEventListener('change', function () {
    if (this.files.length > 0) {
        fileName.style.display = 'block'
        fileName.textContent = "Selected: " + this.files[0].name;
    }
});