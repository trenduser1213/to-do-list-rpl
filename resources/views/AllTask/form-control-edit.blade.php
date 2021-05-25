<div class="modal-body">
    <input type="text" class="form-control" value="{{ $agenda->nama_agenda ?? $agenda->nama_agenda }}" name="nama_agenda" placeholder="Activity Name ...">
    {{-- action control --}}
    <div class="d-flex item-control-container">
        <label onclick="dateClickListenerEdit()" class="p-0 m-0" id="date-container-edit">
            <input type='text' name="tenggat_waktu" class="form-control" id="datepicker-edit">
            <div class="item-control d-flex align-items-center h-100">
                <i class="bi bi-calendar3" id="date-icon-edit"></i><p style="padding-left:5px;" id="date-text-edit">{{ $agenda->tenggat_waktu }}</p>
            </div>
        </label>
        <div class="d-flex item-control" style="margin-left: 12px" id="description-container-edit" onclick="descriptionClickListenerEdit()">
            <i class="bi bi-blockquote-right" id="description-icon-edit"></i><p style="padding-left:5px;" id="description-text-edit">Description</p>
        </div>
        <div class="d-flex item-control" style="margin-left: 12px;margin-right:12px" id="priority-container-edit" onclick="priorityClickListenerEdit()">
            <i class="bi bi-list-ul" id="priority-icon-edit"></i><p style="padding-left:5px;" id="priority-text-edit">Priority</p>
        </div>

        <label onclick="durationClickListener()" class="p-0 m-0" id="duration-container-edit" >
            <input type='text' name="durasi" class="form-control" id="durationpicker-edit">
            <div class="item-control d-flex align-items-center h-100">
                <i class="bi bi-stopwatch" id="duration-icon-edit"></i><p style="padding-left:5px;" id="duration-text-edit">Duration</p>
            </div>
        </label>

    </div>
    <textarea type="text" class="form-control" name="deskripsi" placeholder="Description ..." id="description-input-edit" rows="5">{{ $agenda->deskripsi ?? $agenda->deskripsi }}</textarea>
    {{--input dropdown--}}
    <select class="form-select" name="skala_prioritas" aria-label="Default select example" id="priority-input-edit">
        <option {{ $agenda->skala_prioritas == null ? "" : "selected" }} disabled>Open this select menu</option>
        <option {{ $agenda->skala_prioritas == "1" ? "selected" : "" }} value="1">Low</option>
        <option {{ $agenda->skala_prioritas == "2" ? "selected" : "" }} value="2">Normal</option>
        <option {{ $agenda->skala_prioritas == "3" ? "selected" : "" }} value="3">High</option>
    </select>
    {{--input dropdown--}}
    
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
</div>

<script>
    $(function () {
        $('#datepicker-edit').datetimepicker({
          format: 'YYYY-MM-DD HH:mm:ss',
          defaultDate: {!! json_encode($agenda->tenggat_waktu) !!},
          sideBySide:true,
        }).on("dp.change", function() {
          $('#date-text-edit').html(this.value);
        });
    });
</script>
<script>
    $(function () {
        $('#durationpicker-edit').datetimepicker({
          format: 'HH:mm:ss',
          defaultDate: {!! json_encode($agenda->tenggat_waktu) !!},
          sideBySide:true,
        }).on("dp.change", function() {
          $('#duration-text-edit').html(this.value);
        });
    });
</script>