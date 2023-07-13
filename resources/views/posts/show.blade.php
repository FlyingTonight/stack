<x-layouts.main>
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          width: 100%;
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
          --bd-violet-bg: #712cf9;
          --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

          --bs-btn-font-weight: 600;
          --bs-btn-color: var(--bs-white);
          --bs-btn-bg: var(--bd-violet-bg);
          --bs-btn-border-color: var(--bd-violet-bg);
          --bs-btn-hover-color: var(--bs-white);
          --bs-btn-hover-bg: #6528e0;
          --bs-btn-hover-border-color: #6528e0;
          --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
          --bs-btn-active-color: var(--bs-btn-hover-color);
          --bs-btn-active-bg: #5a23c8;
          --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
          z-index: 1500;
        }
      </style>

    {{-- <div class="b-example-divider"></div> --}}
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAB4CAMAAABsOSjPAAAAllBMVEX///8AAADa2tr19fW3trfKycry8vK0tLT0eAAOERXq6upKS032m18fHyD4+Pj7+/tZWVn3pXHzcwDk5OR0dHRhYWIABQusrKwvMDH97+j96+L0eg2dnp6lpaU+P0DT09OIiIj0gSn4r4P72MX1kEr6zrZ8fHyUlJQXGhwnKCm+v7/83s/0iTv+9vL5wJ/3qXn4tZH1k1d3bww1AAAEY0lEQVR4nO2Wa3OqOhSGs0K4iyAQRLm2VrlUbfv//9xZCdrudvuhdPactjPrmRElXPKweJPIGEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQxP/G7rsF5rNZxI/f7TCbzbEoTt8tMZttXKy+22EWW5XnsxOfv1tkBpujo3SfCucXxXp7LOLnkJ3uiuNvivXCKR5O7PGuWHy3yRzuY+dhy86x85lY82o56+ZLuzLDsuJfU7vJfqu256LAiXpVvJ+tPe/WFXZmzemA1wDtEsD+uuNHNkVxr0Qf46I4s7vi3cIou1uX2IExp4cDBKm9BPcfSu+OThG/7EK2fXDi++3m3cGovXXJTGk/OzBm/VNptjkXcREv9uz0Er/NHpYORtRddsJrswrGRTrUjWPXjoyZZan2qkpgHLoWt8xYl0nStZz5ruSecZE2uxa/eVni/a01Xsmaqps3RC7sX7Dad/vT8/bSICAYQCZM9oO0xgwGqLluRkYmlHQDB9S0fNVUeyOAyVgCUDGpWoAzLwB9MPF7V2VaSRv64MAbnXAbwFPpcb/izNhpd8RqP1ydGxBJ0rQJi6TwMNhJwiNXdWJz3vmhqnQSpOrMFMCPskyyWmWgyoCtcdSVQ1YbXh5ALaHBStfXTLeQ+RL6nEUZXn5wsQL42O1c3WOx2j8q2e3KebiGo/MvP94y7WHvWEaNHYTN1FMILgaohD4poTZCCanhq7OSHEYrd1Es/DPT4aCaRAa8yzK2hN6NGAfXnFvio+PExXHxtN9M/0AmK/D+ljY5XGZaO2+GXAeaX1LRm5769DDyPrObxvShs3JY69N9VVUtnQwg1E8QDbiJCXWeW2sM1+d9QzWoTrvnFc4aDqrHWGjD0mPCOGBOpVhO0skBb55DM+bJRTqD1NVCjQqvEhoxyp2A2mow/5r0hjQP1DOGgAcgW6cgWhhlls4osiHGaY3YbHf3+G+6iHFsj1MxQ96MJbRa2uhTzvkIjfkqDQfWBckk3ai30I+swnBje+O61SjEKBrvZqVxvlgq6QNENXg2SN30eWlb/Lmwbfe4gpvij7V2BC0tXFV9jIeK9SQdLFmYS6ZUsko9RN8wb+h7LHtS65UPp5e/pAUzhgxvaKpMjRjolGHuA5gz4Wnp3erK09ObtKdLWk3So160G+xoUC9y2UzztKkrlLt5WeEGf0q3V19pFlTc9ssP0jjq5GjIbOjWdQ+YuTpQzyt7V85wnqT3Ks4T8curtITSFh32WUFnGm4kROWiNAe5Xvv50u7V4nIIcABxneBejX8sYKmKP2U6t7zhKg3qYVtsNL1aH1Rrj8xcT73Ny0mzKr145eX+VdoQUZ5HKgxrv2NJOuSyUbtemucHi42RkvZ85egd6vqgX4wlo+k1lX7tlwbzpD+lNdXrariWeAurrWupTxO+ehQrimb9+fuQac27TP9Efqn0aH5k/PnS4gY/XDrkt5ixpBIEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQfwK/gPcQ1FX9Z9Z6gAAAABJRU5ErkJggg==" alt="" srcset="">
        </div>
    <div class="container my-5">

      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
          <h1 class="display-4 fw-bold lh-1 text-body-emphasis"> {{$post->title }}</h1>

          <p class="lead"> {{$post->description}}</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">

          </div>
          <p class="lead"> {{$post->category->name}}</p>
        </div>

      </div>
    </div>
<div class="container">
<div class="mb-5">
    <h3 class="mb-4 section-title">{{$post->comments()->count()}} Izohlar</h3>
    @foreach ( $post->comments as $comment )


    <div class="media mb-4">
        <div class="media-body">
            <h2><strong>{{$comment->user->name}}</strong> </h2>
            <small><i>{{$comment->created_at}}</i></small>
            <h3>{{$comment->body}}</h3>


            @if ($comment->confirmation)
            @if ($comment->confirmation->confirmed = true)
               <p class="primary"> True answer </p>
            @endif
        @elseif ($comment->confirmation === false)
        @auth



        <form action="{{ route('confirmations', ['id' => $comment->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="comment_id" value="{{$comment->id}}">
            <button type="submit">Confirm</button>
        </form>
    @endauth

        @endif

        <hr>
        </div>
    </div>
    @endforeach

</div>
<div class="container">
    <div class="w-50 py-4">
               <div class="contact-form">
                   <div id="success"></div>
<form action="{{route('comments.store')}}" method="POST">
    @csrf
</div>

   @auth

   <h3>Create a Comment</h3>
</div>
<div class="container">
    <div class="w-50 py-4">
               <div class="contact-form">
                   <div id="success"></div>



                       </div>
                       <div class="control-group mb-4">
                           <textarea class="form-control p-4" rows="6" name="body" placeholder="Comment" ></textarea>
                           <input type="hidden" name="post_id" value="{{ $post->id}}">
                            @error('content')
                           <p class="help-block text-danger">{{ $message }}</p>
                           @enderror
                       </div>
                       <div>
                           <button class="btn btn-primary btn-block py-3 px-5" type="submit" >Saqlash</button>
                       </div>
                   </form>
               </div>
           </div>
        {{-- </div> --}}

       </div>
       @endauth
</form>
</body>
</html>
</x-layouts.main>
