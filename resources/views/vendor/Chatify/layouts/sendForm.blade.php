<div class="messenger-sendCard py-3">
    <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">
        @csrf
        <label class="mr-1"><span class="fas fa-paperclip"></span>
            <input disabled='disabled' type="file"
                   class="upload-attachment" name="file"
                   accept="image/*, .txt, .rar, .zip"/>
        </label>
        <textarea style="width: 85%;margin: 0px auto;" readonly='readonly' name="message" class="m-send app-scroll"
                  placeholder="Type a message.."></textarea>
        <button class="mr-3" disabled='disabled'><span class="fas fa-paper-plane"></span></button>
    </form>
</div>
