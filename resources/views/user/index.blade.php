<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Прием сотрудников</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
                <a href="#">
                    <img src="img/logo.png" width="50" height="50" class="d-inline-block align-top" alt="Ланит-Финтех">
                </a>
                <a class="navbar-brand font-weight-bold" href="#">
                    
                    <p class="h1">ЛАНИТ-ФИНТЕХ</p>
                </a>
                <div>
                    <p class="text-light m-0">{{ Auth::user()->last_name }} {{ Auth::user()->first_name }}</p>
                    <p class="text-light m-0">{{ Auth::user()->job_title }}</p>
                </div>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                <button class="btn btn-dark">
                    <img type="submit" src="img/exit.png" width="50" height="50" class="d-inline-block align-right" alt="Выход">                    
                </button>
                </form>
                           
                
        </nav>
        <div class="container-fluid w-100" style="min-height: 74vh; display: flex;">
            <div class="row" style="flex-grow: 1;">
                <div class="col-3 rounded m-2 text-light" style="background-color: #483db5;">
                    <p class="m-1 mt-3">Мои вакансии</p>
                    <hr style="color: #a59df3; background-color: #a59df3;">
                    
                    @foreach($data[1] as $vacancy)

                    @if (Cookie::get('vacancy') == $vacancy->id)
                    <div class="rounded p-1" style="background-color: #2f277a;">
                    @else
                    <div>
                    @endif                    
                                
                    <a href="{{ route('setcookievacancy') }}?vacancy={{ $vacancy->id }}" style="text-decoration: none;">
                        <p class="m-1 mt-3" style="color: #fff;">{{ $vacancy->job_title }}</p>
                        <p class="m-1" style="color: #a59df3;">{{ $vacancy->department }}</p>
                    </a>
                    
                    @if (Cookie::get('vacancy') == $vacancy->id)
                    <a href=""><button type="button" class="m-1 btn btn-info btn-sm">Добавить рекрутера</button></a>
                    @endif
                    @if (Cookie::get('vacancy') == $vacancy->id)
                    <a href="{{ route('addcandidate') }}"><button type="button" class="m-1 btn btn-warning btn-sm">Добавить кандидата</button></a>
                    @endif
                    @if (Cookie::get('vacancy') == $vacancy->id)
                    <a href=""><button type="button" class="m-1 btn btn-success btn-sm">Создать этапы</button></a>
                    @endif
                    @if (Cookie::get('vacancy') == $vacancy->id)
                    <a href=""><button type="button" class="m-1 btn btn-primary btn-sm">Добавить собеседующего</button></a>
                    @endif
                    
                    
                    </div> 
                    
                    @endforeach

                    <!-- кнопка появляется только у линейного руководителя или руководителя службы HR -->

                    @if(Auth::user()->employee_category_id == 1001 or Auth::user()->employee_category_id == 1002)

                    <br><br><br>
                    <div class="mb-3">
                        <a href="{{ route('addvacancy') }}"><img src="img/plus.png" alt="Добавить кандидата"></a>
                    </div>
                    
                    
                    @endif

                </div>
                <div class="col m-2">
                    <div class="row">
                        <a href=""><button type="button" class="btn btn-light mr-2 font-weight-bold"><u>В работе</u></button></a>
                        <a href=""><button type="button" class="btn btn-light mr-2">У заказчика</button></a>
                        <a href=""><button type="button" class="btn btn-light mr-2">Интервью</button></a>
                        <a href=""><button type="button" class="btn btn-light mr-2">Выставлен оффер</button></a>
                        <a href=""><button type="button" class="btn btn-light mr-2">Выход на работу</button></a>
                        <a href=""><button type="button" class="btn btn-light mr-2">Отказ</button></a>
                    </div>

                    <div class="row mt-3" >
                        <div class="col-4 border-top border-right" style="border-color: #f3f3f3;">
                            
                          


                            @foreach($data[0] as $candidate)



                            <a href="{{ route('setcookiecandidate') }}?candidate={{ $candidate->id }}" style="text-decoration: none;">
                            
                            @if (Cookie::get('candidate') == $candidate->id)
                            <div class="container mt-4 p-2" style="background-color: #f7f7f7;">
                            @else
                            <div class="container mt-4 p-2">
                            @endif

                            



                                <div class="row">
                                    <div class="col-3">
                                        <img src="storage/img/candidates/{{ $candidate->id }}.png" height="75" class="rounded-circle float-left" alt="кандидат {{ $candidate->id }}">                                        
                                    </div>
                                    <div class="col ml-4">
                                        <p class="m-0 font-weight-bold" style="color: #000;">{{ $candidate->last_name }} {{ $candidate->first_name }}</p>
                                        <p class="m-0" style="color: #a0a0a0;">{{ $candidate->job_title }}</p>
                                        <p class="m-0" style="color: #a0a0a0;">{{ $candidate->company }}</p>
                                    </div>
                                </div>                                
                            </div>
                            </a>
                            @endforeach


                        </div>
                        <div class="col border-top" style="border-color: #f3f3f3;">
                            <div class="container">

                            @foreach($data[0] as $candidate)
                            @if (Cookie::get('candidate') == $candidate->id)
                                <div class="row mt-3">
                                    <div class="col-7">
                                        <p class="h2 font-weight-bold">{{ $candidate->last_name }} {{ $candidate->first_name }}</p>
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="m-0" style="color: #a0a0a0;">Зарплата</p>
                                                <p class="m-0" style="color: #a0a0a0;">Телефон</p>
                                                <p class="m-0" style="color: #a0a0a0;">Эл. почта</p>
                                                <p class="m-0" style="color: #a0a0a0;">Город</p>
                                            </div>
                                            <div class="col">
                                                <p class="m-0">{{ $candidate->salary }}</p>
                                                <p class="m-0">{{ $candidate->telephone }}</p>
                                                <p class="m-0">{{ $candidate->email }}</p>
                                                <p class="m-0">{{ $candidate->city }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <img src="storage/img/candidates/{{ $candidate->id }}.png" height="150" class="rounded float-right" alt="кандидат 1">
                                    </div>
                                </div>
                            

                                <div class="container rounded mt-3" style="background-color: #f7f7f7;">
                                    <div class="row p-2">
                                        <div class="col p-2">
                                            <button type="button" class="btn btn-warning btn-sm">
                                                Посмотреть ответы
                                            </button>
                                        </div>
                                        <div class="col p-2">
                                            <button type="button" class="btn btn-success float-right">
                                                Сменить этап
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <hr style="color: #e4e4e4; background-color: #e4e4e4;">

                                    <div class="row p-2" style="min-height: 100px;">
                                    </div>
                                    
                                </div>
                            @endif
                            @endforeach

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-muted bg-dark p-3">
            <div class="container-fluid">                
                <p>Приложение является частью ВКР «Информационная система учета собеседований при найме работника» © Васютинская Дарья Дмитриевна</p>
                <p>2024</p>
            </div>
        </footer>
       
    </div>
   
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>