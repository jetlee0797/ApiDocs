<div class="form-group">
    <label class="col-sm-2 control-label" ><span class="label label-info" style="float:left;">{{ $param['type'] }}</span></label>
    <label class="col-sm-3 control-label text-left" style="text-align:left;">{{ $param['name'] }}：</label>
    <div class="col-sm-7">
        <input type="number"
        pattern="\\d*"
        class="form-control"
        placeholder="{{ $param['description'] }}"
        name="{{ $param['name'] }}"
        readonly
        onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur(); this.focus(); }">
    </div>
</div>
