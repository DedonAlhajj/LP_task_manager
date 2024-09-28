document.getElementById('attachment').addEventListener('change', function (event) {
  const preview = document.getElementById('preview');
  preview.innerHTML = ''; // Clear previous preview
  const file = event.target.files[0];
  if (file) {
    const fileURL = URL.createObjectURL(file);
    const extension = file.name.split('.').pop().toLowerCase();

    if (['jpg', 'jpeg', 'png'].includes(extension)) {
      const img = document.createElement('img');
      img.src = fileURL;
      img.classList.add('img-fluid');
      img.style.maxWidth = '300px';
      preview.appendChild(img);
    } else if (['mp4', 'mov', 'avi'].includes(extension)) {
      const video = document.createElement('video');
      video.src = fileURL;
      video.controls = true;
      video.width = 320;
      video.height = 240;
      preview.appendChild(video);
    } else {
      const link = document.createElement('a');
      link.href = fileURL;
      link.textContent = 'Preview Attachment';
      link.target = '_blank';
      link.classList.add('btn', 'btn-secondary', 'btn-sm');
      preview.appendChild(link);
    }
  }

});