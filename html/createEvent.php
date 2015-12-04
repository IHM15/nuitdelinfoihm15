<!--
<div  id="createEventModal" class="modal hide fade" id="createEventModal" tabindex="-1" role="dialog" style="display: none; ">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Signaler un &eacute;v&egrave;nement</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <label for="inputEventName">Nom de l'&eacute;v&egrave;nement</label>
            <input type="text" class="form-control" id="inputEventName" placeholder="Tapez ici le nom de l'&eacute;v&egrave;nement">
          </div>
          <div class="form-inline col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div>
              <div class="form-group">
                <label for="inputEventBeginDate">D&eacute;but &agrave;</label>
                <input type="datetime-local" class="form-control" id="inputEventBeginDate">
              </div>
              <div class="form-group">
                <label for="inputEventEndDate">Fin &agrave;</label>
                <input type="datetime-local" class="form-control" id="inputEventEndDate">
              </div>
            </div>
          </div>
          <div class="form-group col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <label for="inputEventDescription">Description</label>
            <textarea class="form-control" rows="3" id="inputEventDescription"></textarea>
            <p class="help-block">Rentrez ici une description de l'&eacute;v&egrave;nement.</p>
          </div>
          <div class="form-group col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <label for="inputEventType">Type d'&eacute;v&egrave;nement</label>
            <select id="inputEventType">
              <option value="cata">Catastrophe naturelle</option>
              <option value="atten">Attentat</option>
              <option value="autre">Autre</option>
            </select>
          </div>
          <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
             <button type="submit" class="btn btn-default">Annuler</button>
             <button type="submit" class="btn btn-primary">Signaler l'&eacute;v&egrave;nement</button>
         </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Signaler l'&eacute;v&egrave;nement</button>
      </div>
    </div>!-- /.modal-content --
  </div>!-- /.modal-dialog --
</div>!-- /.modal -->

<form id="formaddevent">
  <div class="form-group first-elem col-md-8 col-md-offset-2">
    <label for="inputEventName">Nom de l'&eacute;v&egrave;nement</label>
    <input type="text" class="form-control" id="inputEventName" placeholder="Tapez ici le nom de l'&eacute;v&egrave;nement">
  </div>
  <div class="form-inline col-md-8 col-md-offset-2">
    <div>
      <div class="form-group">
        <label for="inputEventBeginDate">D&eacute;but &agrave;</label>
        <input type="datetime-local" class="form-control" id="inputEventBeginDate">
      </div>
      <div class="form-group">
        <label for="inputEventEndDate">Fin &agrave;</label>
        <input type="datetime-local" class="form-control" id="inputEventEndDate">
      </div>
    </div>
  </div>
  <div class="form-group col-md-8 col-md-offset-2">
    <label for="inputEventDescription">Description</label>
    <textarea class="form-control" rows="3" id="inputEventDescription"></textarea>
    <p class="help-block">Rentrez ici une description de l'&eacute;v&egrave;nement.</p>
  </div>
  <div class="form-group col-md-8 col-md-offset-2">
    <label for="inputEventType">Type d'&eacute;v&egrave;nement</label>
    <select id="inputEventType">
      <option value="cata">Catastrophe naturelle</option>
      <option value="atten">Attentat</option>
      <option value="autre">Autre</option>
    </select>
  </div>
  <div class="col-md-8 col-md-offset-2">
     <button id="cancelAddEvent" class="btn btn-default">Annuler</button>
     <button type="submit" class="btn btn-primary">Signaler l'&eacute;v&egrave;nement</button>
 </div>
</form>
