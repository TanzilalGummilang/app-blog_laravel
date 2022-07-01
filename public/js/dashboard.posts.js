// automasi slug
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

title.addEventListener('change', function() {
  fetch('/dashboard/posts/checkSlug?title=' + title.value)
  .then(response => response.json())
  .then(data => slug.value = data.slug)
});

// unactive upload file
document.addEventListener('trix-file-accept', function(e) {
  e.preventDefault();
});

// preview image
function previewImage() {
  const img = document.querySelector('#image');
  const imgPreview = document.querySelector('.imgPreview');
  
  imgPreview.style.display = 'block';

  const oFReader = new FileReader();
  oFReader.readAsDataURL(img.files[0]);

  oFReader.onload = function(oFREvent) {
    imgPreview.src = oFREvent.target.result;
  }
}