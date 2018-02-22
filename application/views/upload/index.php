<?php echo form_open_multipart('upload/upload_file'); ?>
<label class="btn btn-lg bg-white text-dark btn-file mb-0 " id="file">
  Scegli il file<input class="btn btn-secondary" id="userfile" type="file" name="userfile" size="20" hidden onchange="NomeFile()"/>
</label>
<input class="btn btn-lg btn-success font-weight-bold" id="upload" type="submit" value="upload" />
</form>
