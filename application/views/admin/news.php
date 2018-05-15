<main class="mdl-layout__content super-light-dark-bg">
  <div class="page-content">
    <div class="rich-text-layout white-bg">

      <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#addNews" class="mdl-tabs__tab is-active">Add News</a>
            <a href="#viewNews" class="mdl-tabs__tab">News Lists</a>
        </div>

        <div class="mdl-tabs__panel is-active" id="addNews">
          <div class="rich-text-layout white-bg">
          <?php echo validation_errors(); ?>
          <?php echo form_open_multipart('admin/addNews');?>
            <md-input-container>
              <label>News Title</label>
              <input required name="title" ng-model="myApp.title">
              <div ng-messages="myApp.title.$error">
                <div ng-message="required">This is required.</div>
              </div>
            </md-input-container>
            <br>
            <div>
            <span>News Cover* : </span>
              <input type="file" name="userfile" size="20" required="true">
            </div>
            <br>
            <div>
              <textarea name="text"></textarea>
            </div>
            <div align="right">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary"  id="submit" name="submit">
                Submit
              </button>
            </div>
          </form>
          <br>
          </div>
        </div>

        <div class="mdl-tabs__panel" id="viewNews">
          <div class="rich-text-layout white-bg table-responsive">
            <table id="newsTable" class="mdl-data-table" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">News Title</th>
                  <th class="mdl-data-table__cell--non-numeric">News Content</th>
                  <th class="mdl-data-table__cell--non-numeric">Thumbnail</th>
                  <th class="mdl-data-table__cell--non-numeric">Author</th>
                  <th class="mdl-data-table__cell--non-numeric">Created At</th>
                  <th class="mdl-data-table__cell--non-numeric">Last Update</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($news as $row){ ?>
                <tr data-id='<?php echo $row->id_news; ?>'>
                  <td class="mdl-data-table__cell--non-numeric">
                    <span class='span-title caption' data-id='<?php echo $row->id_news; ?>'><?php echo $row->title; ?></span> <input type='text' class='field-email form-control editor' value='<?php echo $row->title; ?>' data-id='<?php echo $row->id_news; ?>' />
                  </td>
                  <td class="mdl-data-table__cell--non-numeric">
                    <?php
                    $string = strip_tags($row->text);
                    if (strlen($string) > 100) {
                        $slug = $row->slug;
                        $stringCut = substr($string, 0, 50);
                        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).
                        '...
                        <a class="url" href=#>Read More</a>';

                    }
                    echo $string;
                    ?>
                  </td>
                  <td class="mdl-data-table__cell--non-numeric">
                    <img class="thumbnail" src="<?php echo base_url()."uploads/images/news/"."$row->image"; ?>">
                  </td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row->username; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row->created_at; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row->updated_at; ?></td>

                </tr>
                <?php } ?>
              </tbody>
            </table>



          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</div>
