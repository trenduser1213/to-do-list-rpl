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
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
    <link href="{{ asset('css/AllTask.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/AllTask.js')}}"></script>
    <title>All Task</title>
</head>
<body>
  <div class="body-container">
    <div class="header-container d-flex w-100 p-4 justify-content-between align-items-center">
      <div>
        <img src="{{asset('asset/img/ido-logo.svg')}}" width="90%"/>
      </div>
      <div class="d-flex">
        {{-- <i class="bi bi-bell px-3" style="margin: auto;color:rgba(0, 0, 0, 0.54);font-size:24px"></i> --}}
        <div class="dropdown">
          <p class="py-2 px-3" style="border-radius: 50%;background-color: #2FAF3C;color:white; cursor:pointer; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; text-transform: capitalize;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{ substr(auth()->user()->nama, 0, 1) }}
          </p>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="transform: translate(-200px, 42px); min-width: 15rem;">
            <div class="profile-login-container d-flex">
              <p class="py-2 px-3" style="border-radius: 50%;background-color: #2FAF3C;color:white; cursor:pointer; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center; text-transform: capitalize;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ substr(auth()->user()->nama, 0, 1) }}
              </p>

              <div class="profile-login-content">
                <h4>{{ auth()->user()->nama }}</h4>
                <small class="text-secondary">{{ auth()->user()->email }}</small>
              </div>
            </div>
            <ul class="list-unstyled m-0">
              <li><h6 class="dropdown-header">Action</h6></li>
              <li>
                <button class="dropdown-item d-flex align-items-center" type="submit" style="color:#D1453B">
                  <i class="bi bi-gear pe-2"></i> Settings
                </button>
              </li>
              <li>
                <button class="dropdown-item d-flex align-items-center" style="color:#D1453B"
                data-bs-toggle="modal" data-bs-target="#signoutmodal">
                  <i class="bi bi-box-arrow-right pe-2" style="font-size: 18px"></i> Log Out
                </button>
              </li>
            </ul>
          </div>
          
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
                {{-- <div class="dropdown">
                  <div class="sort-button d-flex p-2" style="cursor:pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('asset/img/sort-icon.svg')}}" width="24px" height="24px"/>
                    <p style="color:#808080;">Sort: Prioritas</p>
                  </div>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div> --}}
              </div>
            </div>
            <div class="all-task-list">
              @if ($agendas->count() > 0)
                @foreach ($agendas as $key => $agenda_list)
                  <h6 class="fw-bold">{{ $key }}</h6>
                  {{-- list --}}
                  <ul class="list-group list-group-flush group-list-all-task mb-4">
                    @foreach ($agenda_list as $agenda)
                      {{-- list item --}}
                      <li class="list-group-item">
                        <div class="task-container justify-content-between">
                          <div class="tesk-text-container d-flex align-items-center">
                            <div class="task-icon-checkbox-container">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                            <div class="task-content">
                              <strong>{{ $agenda->nama_agenda }}</strong>
                              <p style="color:#808080">{{ $agenda->deskripsi }}</p>
                              <div class="dueto-task-container">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M9 0C4.03732 0 0 4.03732 0 9C0 13.9627 4.03732 18 9 18C13.9627 18 18 13.9627 18 9C18 4.03732 13.9627 0 9 0ZM9 16.0328C5.12202 16.0328 1.96721 12.878 1.96721 9C1.96721 5.12221 5.12202 1.96721 9 1.96721C12.878 1.96721 16.0328 5.12221 16.0328 9C16.0328 12.878 12.878 16.0328 9 16.0328Z" fill="#D1453B"/>
                                  <path d="M9.77872 9.01078V5.23868C9.77872 4.8175 9.43742 4.4762 9.01639 4.4762C8.59524 4.4762 8.25391 4.8175 8.25391 5.23868V9.25437C8.25391 9.26636 8.25686 9.27761 8.25744 9.2896C8.24741 9.49693 8.31884 9.70744 8.47718 9.86581L11.3169 12.7053C11.6147 13.0031 12.0975 13.0031 12.3951 12.7053C12.6927 12.4074 12.6929 11.9247 12.3951 11.627L9.77872 9.01078Z" fill="#D1453B"/>
                                </svg>
                                <p>{{ \Carbon\Carbon::parse($agenda->tenggat_waktu)->format('d F Y H:m:i') }}</p>
                              </div>
                            </div>
                          </div>
                          <div class="task-action d-flex align-items-center">
                            <div class="edit-button" data-id="{{ $agenda->id }}">
                              <i class="bi bi-pencil" style="color:#808080" data-toggle="modal" data-target="#editTaskModal"></i>
                            </div>
                            
                            <div class="delete-button" data-id="{{ $agenda->id }}">
                              <i class="bi bi-x-circle sampah-icon" style="color:#808080" data-bs-toggle="modal" data-bs-target="#deleteModal"></i>
                            </div>
                          </div>
                        </div>
                      </li>
                    @endforeach
                    {{-- list item --}}
                  </ul>
                @endforeach
                @else
                  <h1>No Task</h1>
                @endif
              {{-- end list --}}
            </div>
          </form>
          </div>
          <div class="task-control">
            <button class="btn add-button" data-toggle="modal" data-target="#addTaskModal"><i class="bi bi-plus-circle-fill"></i> Add New Task</button>
          </div>
        </div>
      </div>
        
        <div class="right-side">
          <ul class="accor-container">
            <li class="accor-list active">
              <div class="wrap">
                <div class="accor-header-container">
                  <a class="accor-header" href="#">Today<span>Wed, 21 April</span></a>
                  {{-- 
                    <div class="accor-dropdown dropdown">
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
                    --}}
                </div>
                
                <div>
                  <div class="accor-list-content">
                    <ul class="list-group list-group-flush group-list-all-task">
                      {{-- list item --}}
                      @foreach($priority as $prio)
                        @if ($prio->id === $priority->first()->id)
                        <li class="list-group-item">
                          <div class="task-container priority-task">
                            <div class="tesk-text-container d-flex">
                              <div class="task-icon-checkbox-container d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              </div>
                              <div>
                                <strong style="color:white">{{$prio->nama_agenda}}</strong>
                                <p style="color:rgba(255, 255, 255, 0.58);margin:0px">{{$prio->deskripsi}}</p>
                                <div class="dueto-task-container">
                                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 0C4.03732 0 0 4.03732 0 9C0 13.9627 4.03732 18 9 18C13.9627 18 18 13.9627 18 9C18 4.03732 13.9627 0 9 0ZM9 16.0328C5.12202 16.0328 1.96721 12.878 1.96721 9C1.96721 5.12221 5.12202 1.96721 9 1.96721C12.878 1.96721 16.0328 5.12221 16.0328 9C16.0328 12.878 12.878 16.0328 9 16.0328Z" fill="#fff"/>
                                    <path d="M9.77872 9.01078V5.23868C9.77872 4.8175 9.43742 4.4762 9.01639 4.4762C8.59524 4.4762 8.25391 4.8175 8.25391 5.23868V9.25437C8.25391 9.26636 8.25686 9.27761 8.25744 9.2896C8.24741 9.49693 8.31884 9.70744 8.47718 9.86581L11.3169 12.7053C11.6147 13.0031 12.0975 13.0031 12.3951 12.7053C12.6927 12.4074 12.6929 11.9247 12.3951 11.627L9.77872 9.01078Z" fill="#fff"/>
                                  </svg>
                                  <p style="color:white">{{$prio->tenggat_waktu}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      @else
                        <li class="list-group-item">
                          <div class="task-container justify-content-between">
                            <div class="tesk-text-container d-flex align-items-center">
                              <div class="task-icon-checkbox-container">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              </div>
                              <div class="task-content">
                                <strong>{{$prio->nama_agenda}}</strong>
                                <p style="color:#808080">{{$prio->deskripsi}}</p>
                                <div class="dueto-task-container">
                                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 0C4.03732 0 0 4.03732 0 9C0 13.9627 4.03732 18 9 18C13.9627 18 18 13.9627 18 9C18 4.03732 13.9627 0 9 0ZM9 16.0328C5.12202 16.0328 1.96721 12.878 1.96721 9C1.96721 5.12221 5.12202 1.96721 9 1.96721C12.878 1.96721 16.0328 5.12221 16.0328 9C16.0328 12.878 12.878 16.0328 9 16.0328Z" fill="#D1453B"/>
                                    <path d="M9.77872 9.01078V5.23868C9.77872 4.8175 9.43742 4.4762 9.01639 4.4762C8.59524 4.4762 8.25391 4.8175 8.25391 5.23868V9.25437C8.25391 9.26636 8.25686 9.27761 8.25744 9.2896C8.24741 9.49693 8.31884 9.70744 8.47718 9.86581L11.3169 12.7053C11.6147 13.0031 12.0975 13.0031 12.3951 12.7053C12.6927 12.4074 12.6929 11.9247 12.3951 11.627L9.77872 9.01078Z" fill="#D1453B"/>
                                  </svg>
                                  <p>{{$prio->tenggat_waktu}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      @endif
                    @endforeach 
                      {{-- list item --}}
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="accor-list">
              <div class="wrap">
                <a class="accor-header" href="#">Late</a>
                <div>
                  <div class="accor-list-content">
                    <ul class="list-group list-group-flush group-list-all-task">
                      @foreach ($lateTasks as $lateTask)
                        <li class="list-group-item">
                          <div class="task-container justify-content-between">
                            <div class="tesk-text-container d-flex align-items-center">
                              <div class="task-icon-checkbox-container">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              </div>
                              <div class="task-content">
                                <strong>{{ $lateTask->nama_agenda }}</strong>
                                <p style="color:#808080">{{ $lateTask->deskripsi }}</p>
                                <div class="dueto-task-container">
                                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 0C4.03732 0 0 4.03732 0 9C0 13.9627 4.03732 18 9 18C13.9627 18 18 13.9627 18 9C18 4.03732 13.9627 0 9 0ZM9 16.0328C5.12202 16.0328 1.96721 12.878 1.96721 9C1.96721 5.12221 5.12202 1.96721 9 1.96721C12.878 1.96721 16.0328 5.12221 16.0328 9C16.0328 12.878 12.878 16.0328 9 16.0328Z" fill="#D1453B"/>
                                    <path d="M9.77872 9.01078V5.23868C9.77872 4.8175 9.43742 4.4762 9.01639 4.4762C8.59524 4.4762 8.25391 4.8175 8.25391 5.23868V9.25437C8.25391 9.26636 8.25686 9.27761 8.25744 9.2896C8.24741 9.49693 8.31884 9.70744 8.47718 9.86581L11.3169 12.7053C11.6147 13.0031 12.0975 13.0031 12.3951 12.7053C12.6927 12.4074 12.6929 11.9247 12.3951 11.627L9.77872 9.01078Z" fill="#D1453B"/>
                                  </svg>
                                  <p>{{ \Carbon\Carbon::parse($lateTask->tenggat_waktu)->format('d F Y H:m:i') }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      @endforeach
                      {{-- list item --}}
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </div>
  </div>

  <!-- Delete Modal -->
  <div id="deleteModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered modal-confirm">
      <div class="modal-content">
        <div class="modal-header flex-column">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="icon-box">
            <i class="material-icons">&#xE5CD;</i>
          </div>
          <h4 class="modal-title w-100">Apakah anda yakin?</h4>	
        </div>
        <div class="modal-body">
          <p>Apakah Anda benar-benar ingin menghapus agenda ini? Proses ini tidak dapat dibatalkan.</p>
        </div>
        <div class="modal-footer modal-footer-delete justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Batal</button>
            <form  method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Add Modal -->
  <div class="modal fade bd-example-modal-lg" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <form action="/store" method="POST">
          @csrf
          @include('AllTask.form-control', ['action' => 'add'])
        </form>
      </div>
    </div>
  </div>
  <!-- Add Modal -->

  <!-- Edit Modal -->
  <div class="modal fade bd-example-modal-lg" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTaskModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content edit-model-content">
        <form method="POST">
          @csrf
          @method('patch')
          <div id="edit-modal-body"></div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal -->

  <!-- Log Out Modul -->
  <div class="modal fade" tabindex="-1" id="signoutmodal">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Are you sure you want to sign out?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Yes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Log Out Modul -->

  <!-- Success Add Modul -->
  <div id="successModal" class="modal-custome">

    <!-- Modal content -->
    <div class="modal-content-custome">
      <div class="modal-header-custome">
        <span class="close-custome" id="close-custome-btn">&times;</span>
        <h2 >Success</h2>
      </div>
      <div class="modal-body-custome">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z " 
          fill="#2FAF3C"/>
        </svg>
        <p style="margin-bottom: 32px;margin-top:32px" id="success_text"></p>
      </div>
    </div>
  
  </div>
  <!-- Success Modul -->

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
  <script type="text/javascript">
    $(function () {
        $('#datepicker').datetimepicker({
          format: 'YYYY-MM-DD HH:mm:ss',
          sideBySide:true,
        }).on("dp.change", function(e) {
          console.log(e);
          $('#date-text').html(this.value);
        });
    });
  </script>
  <script type="text/javascript">
    $(function () {
        var d = new Date();
        $('#durationpicker').datetimepicker({
          format: 'HH:mm:ss',
          sideBySide:true,
          defaultDate: d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate() + " 00:00:00",
        }).on("dp.change", function(e) {
          console.log(e);
          $('#duration-text').html(this.value);
        });
    });
  </script>
  <script>
    $(document).ready(function(){
      $('.accor-list').each(function(){
        var $this = $(this);
        
        $this.on('click', function(){
          console.log($('.accor-list'))
          $('.accor-list').removeClass('active');
          $this.addClass('active');
        });
      });
    });
  </script>
  <script>
    const deleteModal = document.getElementById('deleteModal');
    const deleteButton = document.querySelectorAll('.delete-button');

    for(i=0; i<deleteButton.length; i++) {
      deleteButton[i].addEventListener('click', showDeleteModal);
    }

    function showDeleteModal(e) {
        e.preventDefault();
        setDataDelete(e.target.parentElement.dataset.id);
    }

    function setDataDelete(id) {
        console.log(id);
        $('.modal-footer-delete form').attr("action", `/${id}/delete`);
    }
  </script>
  <script>
    const editModal = document.getElementById('editTaskModal');
    const editButton = document.querySelectorAll('.edit-button');

    for(i=0; i<editButton.length; i++) {
      editButton[i].addEventListener('click', showEditModal);
    }

    const setEditDataForm = function(id) {
      $.ajax({
          url: `/${id}/set-data-form`,
          method: "GET",
          // data: {
          //     id: id,
          // },
          success:function(data){
              // $('#popup-detail-transaksi').find('.popup-title').html("Detail Transaksi");
              console.log(data);
              $('#edit-modal-body').html(data);
          },
          error:function(error) {
              console.log(error);
          }
      });
    }

    function setDataEdit(id) {
        $('.edit-model-content form').attr("action", `/${id}/update`);
    }

    function showEditModal(e) {
        e.preventDefault();
        setEditDataForm(e.target.parentElement.dataset.id);
        setDataEdit(e.target.parentElement.dataset.id);
    }
  </script>
   <script>
    var succesmodal = document.getElementById("successModal");
    var spanClose = document.getElementById("close-custome-btn");
    var successText = document.getElementById("success_text");

    window.onclick = function(event) {
      if (event.target == succesmodal) {
        succesmodal.style.display = "none";
      }
    }

    spanClose.onclick = function(event){
      succesmodal.style.display = "none";
    }

    function $_GET(q,s) {
        s = (s) ? s : window.location.search;
        var re = new RegExp('&amp;'+q+'=([^&amp;]*)','i');
        return (s=s.replace(/^\?/,'&amp;').match(re)) ?s=s[1] :s='';
    }
    console.log($_GET('action'));
    if($_GET('action')==="add"){
      succesmodal.style.display='block';
      successText.innerHTML = "Horee.. kamu berhasil membuat jadwal agendamu..";
    }else if($_GET('action')==="delete"){
      succesmodal.style.display='block';
      successText.innerHTML = "Horee.. kamu berhasil menghapus jadwal agendamu..";
    }else if($_GET('action')==="done"){
      succesmodal.style.display='block';
      successText.innerHTML = "Horee.. kamu berhasil update jadwal agendamu..";
    }else{

    }
  </script>
</body>
</html>