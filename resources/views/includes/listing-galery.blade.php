<main class="galery-listing">
        
    <div id="gallery" class="gallery">
      <!-- Images exemples -->
      

        @forelse ($images as $img)
           <img src="{{ $img->url }}" alt="{{ $img->name }}">
        @empty
            <div class="gallery-item">
                <div class="content">pas d'image</div>
            </div>
        @endforelse
     
      <!-- Ajoutez plus d'images selon le besoin -->
    </div>
  
  <div id="lightbox" class="lightbox">
      <span class="prev">&#10094;</span>
      <img class="lightbox-content" id="lightbox-img">
      <span class="next">&#10095;</span>
  </div>
</main>

