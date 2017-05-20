<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sam Yerkes, Web Developer #RVA">

    <title>{{$page->site_title}} @yield('pageTitle')</title>
    
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/app.css">
</head>

<body>
    
    <div id="app">

        <section class="hero is-bold">
          <div class="hero-body">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <h1 class="title">
                                <a href="{{ $page->baseUrl }}">{{$page->site_title}}</a>
                            </h1>
                        </div>
                    </div>
                    <div class="level-right">
                        <div class="level-item">
                            <a href="{{ $page->baseUrl }}" class="nav-item">Home</a>
                            <a href="{{ $page->baseUrl }}/about" class="nav-item">About</a>
                        </div>
                    </div>
                </div>
              
            </div>
          </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="columns">
                    
                    <div class="column is-three-quarters">
                        <div class="content">
                            @yield('body')        
                        </div>
                    </div>
                    
                    <div class="column is-hidden-mobile">
                        @include('_includes.sidebar')
                    </div>
                    
                </div>    
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <p class="is-small"><strong>Pronounciation help:</strong> Yerkes rhymes with circus</p>
                    </div>
                    <div class="column">
                        <status></status>
                    </div>
                </div>
            </div>
        </footer>

    </div>

</body>

<script src="https://unpkg.com/vue@2.3.0"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>
<script src="{{ $page->baseUrl }}/js/app.js""></script>
</html>