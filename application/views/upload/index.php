<?php echo form_open_multipart('upload/upload_file'); ?>
<label class="btn bg-white text-dark btn-file mb-0" id="file">
  Scegli il file<input class="btn btn-secondary" id="inputfile" type="file" name="userfile" size="20" hidden onchange="NomeFile()"/>
</label>
<input class="btn btn-secondary" type="submit" value="upload" />
</form>
