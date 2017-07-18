<div class="contact-wrapper">
  <section class="get-touch">
    <div class="row">
      <div class="small-12 columns">
        <h4 class="subtitle subtitle_align-center"><?=getMessage('GET');?></h4>
        <h2 class="title center text-center"><?=getMessage('LET_VISIT');?></h2>
      </div>
    </div>
  </section>
  <section class="contact">
    <div class="row">
      <div class="small-12 medium-7 medium-offset-1 large-8 columns">
        <div class="form-wrapper">
          <h5 class="title text-center"><?=getMessage('GET');?></h5>
          <form id="form" style="display: none;">
            <input type="text" name="name" required="required"/>
            <input type="text" name="phone" required="required"/>
            <input type="submit" value="Заказать звонок"/>
          </form>
          <script type="text/javascript">
              $(document).ready(function(){
                  $("#form").submit(function() {
                      var form_data = $(this).serialize();
                      $.ajax({
                          type: "POST",
                          url: "send.php",
                          data: form_data,
                          success: function() {
                              alert("Ваше сообщение отпрвлено!");
                          });
                  });
              });
          </script>
          <form  action="/template/php/send.php" class="form" method="POST">
            <div class="row form__row">
              <fieldset class="small-12 large-5 columns">
                <label class="form__label" for="firstName"><?=getMessage('FIRST_NAME');?></label>
                <input id="firstName" class="form__control" name="firstName" type="text" placeholder="<?=getMessage('YOUR_FIRST_NAME');?>Your First Name" required="required">
              </fieldset>
              <fieldset class="small-12 large-6 columns">
                <label class="form__label" for="lastName"><?=getMessage('LAST_NAME');?></label>
                <input id="lastName" class="form__control" name="lastName" type="text" placeholder="<?=getMessage('YOUR_LAST_NAME');?>" required="required">
              </fieldset>
              <fieldset class="small-12 large-11 columns">
                <label class="form__label" for="message"><?=getMessage('MESSAGE');?></label>
                <textarea id="message" class="form__control" name="message" cols="30" rows="10" placeholder="<?=getMessage('WRITE');?>" required="required"></textarea>
              </fieldset>
              <fieldset class="small-12 large-5 columns">
                <label class="form__label" for="email"><?=getMessage('EMAIL');?></label>
                <input id="email" class="form__control" name="email" type="email" placeholder="<?=getMessage('YOUR_EMAIL');?>">
              </fieldset>
              <div class="small-12 large-6 end columns">
                <button class="button form__button" type="submit"><?=getMessage('SEND_MESSAGE');?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="small-12 medium-4 large-3 columns">
        <address class="contact-address text-center">
          <dl>
            <dt class="dl-title"><?=getMessage('ADDRESS');?></dt>
            <dd class="dl-description"><?=getMessage('ADDR');?></dd>
          </dl>
          <dl>
            <dt class="dl-title"><?=getMessage('OPEN_HOURS');?></dt>
            <dd class="dl-description">
              <p><?=getMessage('TUE_THU');?></p>
              <p><?=getMessage('FRI_SAT');?></p>
              <p><?=getMessage('SUNDAY');?></p>
            </dd>
          </dl>
          <dl>
            <dt class="dl-title"><?=getMessage('EMAIL');?></dt>
            <dd class="dl-description">support@cakefactory.com</dd>
          </dl>
          <dl>
            <dt class="dl-title"><?=getMessage('TELEPHONE');?></dt>
            <dd class="dl-description">+7 800 333 7874</dd>
          </dl>
        </address>
          <?
          include_once('networks.php')
          ?>
      </div>
    </div>
  </section>
</div>