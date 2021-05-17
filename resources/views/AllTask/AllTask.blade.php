<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/AllTask.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/AllTask.js')}}"></script>
    <title>All Task</title>
</head>
<body>
    <div class="header-container d-flex w-100 py-2 px-4 justify-content-between align-items-center">
      <div>
        <img src="{{asset('asset/img/ido-logo.svg')}}" width="90%"/>
      </div>
      <div class="d-flex">
        <i class="bi bi-bell px-3" style="margin: auto;color:rgba(0, 0, 0, 0.54);font-size:24px"></i>
        <div class="dropdown">
          <p class="py-2 px-3" style="border-radius: 50%;background-color: #2FAF3C;color:white; cursor:pointer" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">F</p>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="dropdown-item d-flex align-items-center" type="submit" style="color:#D1453B">
                  <i class="bi bi-box-arrow-right pe-2" style="font-size: 18px"></i> Log Out
                </button>
             </form>
          </li>
          </ul>
        </div>
        
      </div>
    </div>
    <div class="alltask-content">
        <div class="left-side">
            <div class="list-container">
              <div class="top-container">
                <div class="task-list d-flex justify-content-between">
                  <h1>All Task</h1>
                  <div class="d-flex">
                    <div class="dropdown">
                      <div class="sort-button d-flex p-2" style="cursor:pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('asset/img/sort-icon.svg')}}" width="24px" height="24px"/>
                        <p style="color:#808080;">Sort: Prioritas</p>
                      </div>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="all-task-list">
                  {{-- list --}}
                  <ul class="list-group list-group-flush group-list-all-task">
                    {{-- list item --}}
                    <li class="list-group-item">
                      <div class="task-container justify-content-between">
                        <div class="tesk-text-container d-flex align-items-center">
                          <div class="task-icon-checkbox-container">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          </div>
                          <div class="task-content">
                            <strong>Meeting rpl</strong>
                            <p style="color:#808080">Diskusi tentang prototype</p>
                            <div class="dueto-task-container">
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 0C4.03732 0 0 4.03732 0 9C0 13.9627 4.03732 18 9 18C13.9627 18 18 13.9627 18 9C18 4.03732 13.9627 0 9 0ZM9 16.0328C5.12202 16.0328 1.96721 12.878 1.96721 9C1.96721 5.12221 5.12202 1.96721 9 1.96721C12.878 1.96721 16.0328 5.12221 16.0328 9C16.0328 12.878 12.878 16.0328 9 16.0328Z" fill="#D1453B"/>
                                <path d="M9.77872 9.01078V5.23868C9.77872 4.8175 9.43742 4.4762 9.01639 4.4762C8.59524 4.4762 8.25391 4.8175 8.25391 5.23868V9.25437C8.25391 9.26636 8.25686 9.27761 8.25744 9.2896C8.24741 9.49693 8.31884 9.70744 8.47718 9.86581L11.3169 12.7053C11.6147 13.0031 12.0975 13.0031 12.3951 12.7053C12.6927 12.4074 12.6929 11.9247 12.3951 11.627L9.77872 9.01078Z" fill="#D1453B"/>
                              </svg>
                              <p>23 maret 2021</p>
                            </div>
                          </div>
                        </div>
                        <div class="task-action d-flex align-items-center">
                          <i class="bi bi-pencil" style="color:#808080" data-toggle="modal" data-target="#exampleModalCenter"></i>
                          <i class="bi bi-x-circle sampah-icon" style="color:#808080"></i>
                        </div>
                      </div>
                    </li>
                    {{-- list item --}}
                  </ul>
                  {{-- end list --}}
                </div>
              </div>
              <div class="task-control">
                <button class="btn btn-success add-button" data-toggle="modal" data-target="#exampleModalCenter"><i class="bi bi-plus-circle-fill"></i> Add New Task</button>
              </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              {{--
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            --}}
              <div class="modal-body">
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Activity Name ...">
                {{-- action control --}}
                <div class="d-flex item-control-container">
                  <label onclick="dateClickListener()" class="p-0" id="date-container">
                    <input type="datetime-local" id="datepicker">
                    <div class="item-control d-flex align-items-center h-100">
                      <i class="bi bi-calendar3" id="date-icon"></i><p style="padding-left:5px;" id="date-text">Today</p>
                    </div>
                  </label>
                  <div class="d-flex item-control" style="margin-left: 12px" id="description-container" onclick="descriptionClickListener()">
                    <i class="bi bi-blockquote-right" id="description-icon"></i><p style="padding-left:5px;" id="description-text">Description</p>
                  </div>
                  <div class="d-flex item-control" style="margin-left: 12px" id="priority-container" onclick="priorityClickListener()">
                    <i class="bi bi-list-ul" id="priority-icon"></i><p style="padding-left:5px;" id="priority-text">Priority</p>
                  </div>
                </div>
                <textarea type="text" class="form-control" placeholder="Description ..." id="description-input" rows="5"></textarea>
                {{--input dropdown--}}
                <select class="form-select" aria-label="Default select example" id="priority-input">
                  <option selected>Open this select menu</option>
                  <option value="low">Low</option>
                  <option value="normal">Normal</option>
                  <option value="high">High</option>
                </select>
                {{--input dropdown--}}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
        
        <div class="right-side">
          <ul class="accor-container">
            <li class="accor-list active">
              <div class="wrap">
                <a class="accor-header" href="#">Today<span>Wed, 21 April</span></a>
                <div>
                  <div class="accor-list-content">
                    <div class="d-flex justify-content-end">
                      <div class="dropdown">
                        <div class="sort-button d-flex p-2" style="cursor:pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <img src="{{asset('asset/img/sort-icon.svg')}}" width="24px" height="24px"/>
                          <p style="color:#808080;">Sort: Prioritas</p>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
                    </div>
                    <ul class="list-group list-group-flush group-list-all-task">
                      {{-- list item --}}
                      <li class="list-group-item">
                        <div class="task-container priority-task">
                          <div class="tesk-text-container d-flex">
                            <div class="task-icon-checkbox-container d-flex align-items-center">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                            <div>
                              <strong style="color:white">Meeting rpl</strong>
                              <p style="color:rgba(255, 255, 255, 0.58);margin:0px">Daily Scrum</p>
                              <div class="dueto-task-container">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M9 0C4.03732 0 0 4.03732 0 9C0 13.9627 4.03732 18 9 18C13.9627 18 18 13.9627 18 9C18 4.03732 13.9627 0 9 0ZM9 16.0328C5.12202 16.0328 1.96721 12.878 1.96721 9C1.96721 5.12221 5.12202 1.96721 9 1.96721C12.878 1.96721 16.0328 5.12221 16.0328 9C16.0328 12.878 12.878 16.0328 9 16.0328Z" fill="#fff"/>
                                  <path d="M9.77872 9.01078V5.23868C9.77872 4.8175 9.43742 4.4762 9.01639 4.4762C8.59524 4.4762 8.25391 4.8175 8.25391 5.23868V9.25437C8.25391 9.26636 8.25686 9.27761 8.25744 9.2896C8.24741 9.49693 8.31884 9.70744 8.47718 9.86581L11.3169 12.7053C11.6147 13.0031 12.0975 13.0031 12.3951 12.7053C12.6927 12.4074 12.6929 11.9247 12.3951 11.627L9.77872 9.01078Z" fill="#fff"/>
                                </svg>
                                <p style="color:white">23 maret 2021</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
  
                      <li class="list-group-item">
                        <div class="task-container justify-content-between">
                          <div class="tesk-text-container d-flex align-items-center">
                            <div class="task-icon-checkbox-container">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                            <div class="task-content">
                              <strong>Meeting rpl</strong>
                              <p style="color:#808080">Diskusi tentang prototype</p>
                              <div class="dueto-task-container">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M9 0C4.03732 0 0 4.03732 0 9C0 13.9627 4.03732 18 9 18C13.9627 18 18 13.9627 18 9C18 4.03732 13.9627 0 9 0ZM9 16.0328C5.12202 16.0328 1.96721 12.878 1.96721 9C1.96721 5.12221 5.12202 1.96721 9 1.96721C12.878 1.96721 16.0328 5.12221 16.0328 9C16.0328 12.878 12.878 16.0328 9 16.0328Z" fill="#D1453B"/>
                                  <path d="M9.77872 9.01078V5.23868C9.77872 4.8175 9.43742 4.4762 9.01639 4.4762C8.59524 4.4762 8.25391 4.8175 8.25391 5.23868V9.25437C8.25391 9.26636 8.25686 9.27761 8.25744 9.2896C8.24741 9.49693 8.31884 9.70744 8.47718 9.86581L11.3169 12.7053C11.6147 13.0031 12.0975 13.0031 12.3951 12.7053C12.6927 12.4074 12.6929 11.9247 12.3951 11.627L9.77872 9.01078Z" fill="#D1453B"/>
                                </svg>
                                <p>23 maret 2021</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      {{-- list item --}}
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="accor-list">
              <div class="wrap">
                <a class="accor-header" href="#">Late</a>
                <div class="accor-list-content">text 2</div>    
              </div>
            </li>
          </ul>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $('.accor-list').each(function(){
        var $this = $(this);
        
        $this.on('click', function(){
          console.log($('.accor-list'))
          $('.accor-list').removeClass('active');
          $this.addClass('active');
        });
      });
    </script>
</body>
</html>