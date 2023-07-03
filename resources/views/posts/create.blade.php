<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Document</title>
</head>
<body>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAB4CAMAAABsOSjPAAAAllBMVEX///8AAADa2tr19fW3trfKycry8vK0tLT0eAAOERXq6upKS032m18fHyD4+Pj7+/tZWVn3pXHzcwDk5OR0dHRhYWIABQusrKwvMDH97+j96+L0eg2dnp6lpaU+P0DT09OIiIj0gSn4r4P72MX1kEr6zrZ8fHyUlJQXGhwnKCm+v7/83s/0iTv+9vL5wJ/3qXn4tZH1k1d3bww1AAAEY0lEQVR4nO2Wa3OqOhSGs0K4iyAQRLm2VrlUbfv//9xZCdrudvuhdPactjPrmRElXPKweJPIGEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQxP/G7rsF5rNZxI/f7TCbzbEoTt8tMZttXKy+22EWW5XnsxOfv1tkBpujo3SfCucXxXp7LOLnkJ3uiuNvivXCKR5O7PGuWHy3yRzuY+dhy86x85lY82o56+ZLuzLDsuJfU7vJfqu256LAiXpVvJ+tPe/WFXZmzemA1wDtEsD+uuNHNkVxr0Qf46I4s7vi3cIou1uX2IExp4cDBKm9BPcfSu+OThG/7EK2fXDi++3m3cGovXXJTGk/OzBm/VNptjkXcREv9uz0Er/NHpYORtRddsJrswrGRTrUjWPXjoyZZan2qkpgHLoWt8xYl0nStZz5ruSecZE2uxa/eVni/a01Xsmaqps3RC7sX7Dad/vT8/bSICAYQCZM9oO0xgwGqLluRkYmlHQDB9S0fNVUeyOAyVgCUDGpWoAzLwB9MPF7V2VaSRv64MAbnXAbwFPpcb/izNhpd8RqP1ydGxBJ0rQJi6TwMNhJwiNXdWJz3vmhqnQSpOrMFMCPskyyWmWgyoCtcdSVQ1YbXh5ALaHBStfXTLeQ+RL6nEUZXn5wsQL42O1c3WOx2j8q2e3KebiGo/MvP94y7WHvWEaNHYTN1FMILgaohD4poTZCCanhq7OSHEYrd1Es/DPT4aCaRAa8yzK2hN6NGAfXnFvio+PExXHxtN9M/0AmK/D+ljY5XGZaO2+GXAeaX1LRm5769DDyPrObxvShs3JY69N9VVUtnQwg1E8QDbiJCXWeW2sM1+d9QzWoTrvnFc4aDqrHWGjD0mPCOGBOpVhO0skBb55DM+bJRTqD1NVCjQqvEhoxyp2A2mow/5r0hjQP1DOGgAcgW6cgWhhlls4osiHGaY3YbHf3+G+6iHFsj1MxQ96MJbRa2uhTzvkIjfkqDQfWBckk3ai30I+swnBje+O61SjEKBrvZqVxvlgq6QNENXg2SN30eWlb/Lmwbfe4gpvij7V2BC0tXFV9jIeK9SQdLFmYS6ZUsko9RN8wb+h7LHtS65UPp5e/pAUzhgxvaKpMjRjolGHuA5gz4Wnp3erK09ObtKdLWk3So160G+xoUC9y2UzztKkrlLt5WeEGf0q3V19pFlTc9ssP0jjq5GjIbOjWdQ+YuTpQzyt7V85wnqT3Ks4T8curtITSFh32WUFnGm4kROWiNAe5Xvv50u7V4nIIcABxneBejX8sYKmKP2U6t7zhKg3qYVtsNL1aH1Rrj8xcT73Ny0mzKr145eX+VdoQUZ5HKgxrv2NJOuSyUbtemucHi42RkvZ85egd6vqgX4wlo+k1lX7tlwbzpD+lNdXrariWeAurrWupTxO+ehQrimb9+fuQac27TP9Efqn0aH5k/PnS4gY/XDrkt5ixpBIEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQfwK/gPcQ1FX9Z9Z6gAAAABJRU5ErkJggg==" alt="" srcset="">
        </div>
        <h3>Create a question</h3>
    </div>
    <div class="container">
        <div class="w-50 py-4">
                   <div class="contact-form">
                       <div id="success"></div>

                       <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" >
                           @csrf
                          <div class="control-group mb-4">
                               <input type="text" class="form-control p-4" name="title" value="{{old('title')}}" placeholder="Sarlavha"  />
                               @error('title')
                               <p class="help-block text-danger">{{ $message }}</p>
                               @enderror
                           </div>
                           </div>
                           <div class="control-group mb-4">
                               <select name="category_id" >
                                   @foreach ($categories as $category)
                                   <option value="{{$category->id}}">
                                    {{$category->name}}</option>
                                   @endforeach
                               </select>
                           </div>

                           </div>
                           <div class="control-group mb-4">
                               <textarea class="form-control p-4" rows="6" name="description" placeholder="Maqola" >{{old('description')}}</textarea>
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

</body>
</html>
