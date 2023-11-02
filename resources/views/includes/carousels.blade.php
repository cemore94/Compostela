<div class="container">
    <div class="main">
        <div class="carrusel">
            @include('includes.cards')
            @include('includes.cards')
            @include('includes.cards')
        </div>
    </div>
</div>
<script>
    // Refers to the carousel root element you want to target, use specific class selectors if using multiple carousels
    const el = document.querySelector('.carrusel');
    // Create a new carousel object
    const exampleCarousel = new Carousel(el);
    // Setup carousel and methods
    exampleCarousel.preContent = document.querySelectorAll('.card-container');
    exampleCarousel.carouselOptions = ['previous', 'next'];
    exampleCarousel.carouselData = [
    {
        'id': '1',
        'content': '1',
    },
    {
        'id': '2',
        'content': '2',
    },
    {
        'id': '3',
        'content': '3',
    }
    ];
    exampleCarousel.mounted();
</script>
