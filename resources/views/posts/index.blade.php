<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

    </head>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">StackOverflow</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <div>
                    {{-- {{auth()->user()->name}} --}}
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
                @auth
                <div class="navbar-brand">
                    Welcome
                    {{auth()->user()->name}}
                </div>

                <a href="{{route ('posts.create')}}" class="btn btn-primary mr-3 d-none d-lg-block">Post Yaratish</a>
                <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-dark mr-3 d-none d-lg-block">Chiqish</button>
                </form>
               @else

               <a href="{{route ('login')}}" class="btn btn-primary mr-3 d-none d-lg-block">Kirish</a>

                @endauth
              {{-- <a class="btn btn-outline-success" href="{{route('posts.create')}}">Create</a> --}}
            </form>
          </div>
        </div>
      </nav>
    <body class="antialiased">


            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAB4CAMAAABsOSjPAAAAllBMVEX///8AAADa2tr19fW3trfKycry8vK0tLT0eAAOERXq6upKS032m18fHyD4+Pj7+/tZWVn3pXHzcwDk5OR0dHRhYWIABQusrKwvMDH97+j96+L0eg2dnp6lpaU+P0DT09OIiIj0gSn4r4P72MX1kEr6zrZ8fHyUlJQXGhwnKCm+v7/83s/0iTv+9vL5wJ/3qXn4tZH1k1d3bww1AAAEY0lEQVR4nO2Wa3OqOhSGs0K4iyAQRLm2VrlUbfv//9xZCdrudvuhdPactjPrmRElXPKweJPIGEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQxP/G7rsF5rNZxI/f7TCbzbEoTt8tMZttXKy+22EWW5XnsxOfv1tkBpujo3SfCucXxXp7LOLnkJ3uiuNvivXCKR5O7PGuWHy3yRzuY+dhy86x85lY82o56+ZLuzLDsuJfU7vJfqu256LAiXpVvJ+tPe/WFXZmzemA1wDtEsD+uuNHNkVxr0Qf46I4s7vi3cIou1uX2IExp4cDBKm9BPcfSu+OThG/7EK2fXDi++3m3cGovXXJTGk/OzBm/VNptjkXcREv9uz0Er/NHpYORtRddsJrswrGRTrUjWPXjoyZZan2qkpgHLoWt8xYl0nStZz5ruSecZE2uxa/eVni/a01Xsmaqps3RC7sX7Dad/vT8/bSICAYQCZM9oO0xgwGqLluRkYmlHQDB9S0fNVUeyOAyVgCUDGpWoAzLwB9MPF7V2VaSRv64MAbnXAbwFPpcb/izNhpd8RqP1ydGxBJ0rQJi6TwMNhJwiNXdWJz3vmhqnQSpOrMFMCPskyyWmWgyoCtcdSVQ1YbXh5ALaHBStfXTLeQ+RL6nEUZXn5wsQL42O1c3WOx2j8q2e3KebiGo/MvP94y7WHvWEaNHYTN1FMILgaohD4poTZCCanhq7OSHEYrd1Es/DPT4aCaRAa8yzK2hN6NGAfXnFvio+PExXHxtN9M/0AmK/D+ljY5XGZaO2+GXAeaX1LRm5769DDyPrObxvShs3JY69N9VVUtnQwg1E8QDbiJCXWeW2sM1+d9QzWoTrvnFc4aDqrHWGjD0mPCOGBOpVhO0skBb55DM+bJRTqD1NVCjQqvEhoxyp2A2mow/5r0hjQP1DOGgAcgW6cgWhhlls4osiHGaY3YbHf3+G+6iHFsj1MxQ96MJbRa2uhTzvkIjfkqDQfWBckk3ai30I+swnBje+O61SjEKBrvZqVxvlgq6QNENXg2SN30eWlb/Lmwbfe4gpvij7V2BC0tXFV9jIeK9SQdLFmYS6ZUsko9RN8wb+h7LHtS65UPp5e/pAUzhgxvaKpMjRjolGHuA5gz4Wnp3erK09ObtKdLWk3So160G+xoUC9y2UzztKkrlLt5WeEGf0q3V19pFlTc9ssP0jjq5GjIbOjWdQ+YuTpQzyt7V85wnqT3Ks4T8curtITSFh32WUFnGm4kROWiNAe5Xvv50u7V4nIIcABxneBejX8sYKmKP2U6t7zhKg3qYVtsNL1aH1Rrj8xcT73Ny0mzKr145eX+VdoQUZ5HKgxrv2NJOuSyUbtemucHi42RkvZ85egd6vqgX4wlo+k1lX7tlwbzpD+lNdXrariWeAurrWupTxO+ehQrimb9+fuQac27TP9Efqn0aH5k/PnS4gY/XDrkt5ixpBIEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQfwK/gPcQ1FX9Z9Z6gAAAABJRU5ErkJggg==" alt="" srcset="">
                </div>
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               @foreach ($posts as $post)
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                <div class="row align-items-md-stretch">
                                    <div class="col-md-12">
                                      <div class="h-100 p-5 text-white bg-dark rounded-3">
                                        <h3>{{$post['title']}}</h3>
                                        <p>
                                            {{$post['description']}}
                                        </p>
                                        <button class="btn btn-outline-light" type="button">Answer</button>
                                      </div>
                                    </div>
                            </div>
                        </div>

                @endforeach
            </div>
            </div>


            </div>
        </div>
    </body>
</html>
