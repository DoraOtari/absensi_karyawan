<div wire:poll.1000ms>
    <label>Jam</label>
    <input readonly type="text" value="{{ date('H.i.s') }}" class="form-control-plaintext text-white">
    <input type="hidden" readonly value="{{ date('H.i') }}" name="jam">
</div>
