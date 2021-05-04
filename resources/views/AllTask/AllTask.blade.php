<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/AllTask.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/AllTask.js')}}"></script>
    <title>All Task</title>
</head>
<body>
    <div class="alltask-content">
        <div class="left-side">
            <div class="list-container">
              <div class="top-container">
                <div class="task-list d-flex justify-content-between">
                  <h1>All Task</h1>
                  <div class="d-flex">
                    <div class="dropdown d-flex">
                      <img src="{{asset('asset/img/sort-icon.svg')}}" width="24px" height="24px"/>
                      <p style="color:#808080;cursor:pointer;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort: Prioritas</p>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
                        <div class="tesk-text-container d-flex">
                          <div class="task-icon-checkbox-container d-flex align-items-center">
                            <label class="container-checkbox">
                              <input type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                          </div>
                          <div>
                            <strong>meeting rpl</strong>
                            <div class="dueto-task-container">
                              <i class="bi bi-clock" style="color:#D1453B"></i>
                              <p>23 maret 2021</p>
                            </div>
                            <p style="color:#808080">pada hari minggu</p>
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
                  <label onclick="dateClickListener()" class="item-control" id="date-container">
                    <input type="date" id="datepicker">
                    <div class="d-flex">
                      <i class="bi bi-calendar3" id="date-icon" style="padding-top:4px"></i><p style="margin: 0;padding-left:5px;padding-top:10px" id="date-text">Today</p>
                    </div>
                  </label>
                  <div class="d-flex item-control" style="margin-left: 12px" id="description-container" onclick="descriptionClickListener()">
                    <i class="bi bi-blockquote-right" id="description-icon"></i><p style="margin: 0;padding-left:5px;" id="description-text">Description</p>
                  </div>
                  <div class="d-flex item-control" style="margin-left: 12px" id="priority-container" onclick="priorityClickListener()">
                    <i class="bi bi-list-ul" id="priority-icon"></i><p style="margin: 0;padding-left:5px;" id="priority-text">Priority</p>
                  </div>
                </div>
                <input type="text" class="form-control" placeholder="Description ..." id="description-input">
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
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne" onclick="priorityTask()">
                      <button class="accordion-button" id="accourdion-btn-one" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <div class="d-flex justify-content-between w-100">
                          <div class="d-flex">
                            <strong style="font-size: 18px">Today</strong>
                            <p style="font-size:12px;margin:auto;padding-left:10px">Wed, 21 April</p>
                          </div>
              
                        </div>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="dropdown">
                          <div class="d-flex">
                            <img src="{{asset('asset/img/sort-icon.svg')}}" width="24px" height="24px"/>
                            <p class="sort-item-container" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort: Prioritas</p>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </div>
                        <ul class="list-group list-group-flush list-group-action">
                          {{--task list--}}
                          <li class="list-group-item">
                            <div class="task-container priority-task">
                              <div class="tesk-text-container d-flex">
                                <div class="task-icon-checkbox-container d-flex align-items-center">
                                  <label class="container-checkbox">
                                    {{-- input set to checked
                                      <input type="checkbox" checked="checked">
                                       --}}
                                    <input type="checkbox"/>
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                                <div>
                                  <strong style="color:white">meeting rpl</strong>
                                  <p style="color:rgba(255, 255, 255, 0.58);margin:0px">pada hari minggu</p>
                                  <div class="dueto-task-container">
                                    <i class="bi bi-clock" style="color:white"></i>
                                    <p style="color:white">23 maret 2021</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="list-group-item">
                            <div class="task-container">
                              <div class="tesk-text-container d-flex">
                                <div class="task-icon-checkbox-container d-flex align-items-center">
                                  <label class="container-checkbox">
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                                <div>
                                  <strong>meeting rpl</strong>
                                  <p style="color:#808080;margin:0px">pada hari minggu</p>
                                  <div class="dueto-task-container">
                                    <i class="bi bi-clock" style="color:#D1453B"></i>
                                    <p>23 maret 2021</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          {{--task list--}}
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo" onclick="lateTask()">
                      <button class="accordion-button collapsed" id="accourdion-btn-two" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="d-flex justify-content-between w-100">
                          <div class="d-flex">
                            Late
                          </div>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="dropdown">
                          <div class="d-flex">
                            <img src="{{asset('asset/img/sort-icon.svg')}}" width="24px" height="24px"/>
                            <p class="sort-item-container" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort: Prioritas</p>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </div>
                        <ul class="list-group list-group-flush list-group-action">
                          {{--task list--}}

                          <li class="list-group-item">
                            <div class="task-container" style="color:#FF4437">
                              <div class="tesk-text-container d-flex">
                                <div class="task-icon-checkbox-container d-flex align-items-center">
                                  <label class="container-checkbox">
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                                <div>
                                  <strong>meeting rpl</strong>
                                  <p style="color:rgba(255, 68, 55, 0.5);">pada hari minggu</p>
                                  <div class="dueto-task-container late-task">
                                    <i class="bi bi-clock" style="color:white"></i>
                                    <p style="color:white">23 maret 2021</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>

                          <li class="list-group-item">
                            <div class="task-container" style="color:#FF4437">
                              <div class="tesk-text-container d-flex">
                                <div class="task-icon-checkbox-container d-flex align-items-center">
                                  <label class="container-checkbox">
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                                <div>
                                  <strong>meeting rpl</strong>
                                  <p style="color:rgba(255, 68, 55, 0.5);">pada hari minggu</p>
                                  <div class="dueto-task-container late-task">
                                    <i class="bi bi-clock" style="color:white"></i>
                                    <p style="color:white">23 maret 2021</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                          {{-- task list--}}
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</body>
</html>