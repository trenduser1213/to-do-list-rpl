<div class="modal-body">
    <input type="text" class="form-control"  name="nama_agenda" placeholder="Activity Name ...">
    {{-- action control --}}
    <div class="d-flex item-control-container">
        <label onclick="dateClickListener()" class="p-0 m-0" id="date-container">
            <input type='text' name="tenggat_waktu" class="form-control" id="datepicker">
            <div class="item-control d-flex align-items-center h-100">
                <i class="bi bi-calendar3" id="date-icon"></i><p style="padding-left:5px;" id="date-text">Today</p>
            </div>
        </label>
        <div class="d-flex item-control" style="margin-left: 12px" id="description-container" onclick="descriptionClickListener()">
            <i class="bi bi-blockquote-right" id="description-icon"></i><p style="padding-left:5px;" id="description-text">Description</p>
        </div>
        <div class="d-flex item-control" style="margin-left: 12px;margin-right:12px;" id="priority-container" onclick="priorityClickListener()">
            <i class="bi bi-list-ul" id="priority-icon"></i><p style="padding-left:5px;" id="priority-text">Priority</p>
        </div>
        <label onclick="durationClickListener()" class="p-0 m-0" id="duration-container" >
            <input type='text' name="durasi" class="form-control" id="durationpicker">
            <div class="item-control d-flex align-items-center h-100">
                <i class="bi bi-stopwatch" id="duration-icon"></i><p style="padding-left:5px;" id="duration-text">Duration</p>
            </div>
        </label>
    </div>
    <textarea type="text" class="form-control" name="deskripsi" placeholder="Description ..." id="description-input" rows="5"></textarea>
    {{--input dropdown--}}
    <select class="form-select" name="skala_prioritas" aria-label="Default select example" id="priority-input">
        <option selected disabled>Open this select menu</option>
        <option value="1">Low</option>
        <option value="2">Normal</option>
        <option value="3">High</option>
    </select>
    {{--input dropdown--}}
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Add Agenda</button>
</div>