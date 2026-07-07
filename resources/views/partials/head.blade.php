<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

@if(request()->routeIs('home'))
    <title>
        Yayasan Sinar Bhakti Husada
    </title>
@else
    <title>
        {{ filled($title ?? null) ? $title.' | '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
    </title>
    
@endif



{{-- <link rel="icon" href="logo/favicon.ico" sizes="any"> --}}
{{-- <link rel="icon" href="logo/favicon.svg" type="image/svg+xml"> --}}
{{-- <link rel="icon" href="logo/logo-ysbh-v2-diamond.svg" type="image/svg+xml"> --}}
<link rel="icon" href="logo/emblem-sinar-bhakti-husada.svg" type="image/svg+xml">
{{-- <link rel="icon" href="logo/sunburst-seal-sinar-bhakti-husada.svg" type="image/svg+xml"> --}}
<link rel="apple-touch-icon" href="logo/apple-touch-icon.png">
<link rel="apple-touch-icon" href="logo/apple-touch-icon.png">


@fonts

@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles()
<script>
    console.log('✅ Vite Assets from HEAD Loaded Successfully!');
</script>
