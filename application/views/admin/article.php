<main class="mdl-layout__content super-light-dark-bg">
  <div class="page-content">
  <div class="rich-text-layout white-bg">
      <div class="article-text">
          <md-input-container flex="50">
            <label>Article Title</label>
            <input required name="article_title" ng-model="myApp.article_title">
            <div ng-messages="myApp.article_title.$error">
              <div ng-message="required">This is required.</div>
            </div>
            <br>
            <b>Article Cover*</b>
            <br>
            <input type="file" required name="article_cover" ng-model="myApp.article_cover">
            <div ng-messages="myApp.article_cover.$error">
              <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>
          
          <textarea name="article_text"></textarea>
          <div align="right">
          <md-button class="md-primary">Submit</md-button>
          </div>
          <br>
      </div>
    </div>

  <div class="rich-text-layout white-bg table-responsive">
  <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
    <thead>
      <tr>
        <th class="mdl-data-table__cell--non-numeric">No.</th>
        <th class="mdl-data-table__cell--non-numeric">Title</th>
        <th class="mdl-data-table__cell--non-numeric">Text</th>
        <th class="mdl-data-table__cell--non-numeric">Thumbnail</th>
        <th class="mdl-data-table__cell--non-numeric">Option</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">1</td>
        <td class="mdl-data-table__cell--non-numeric">Article Title</td>
        <td class="mdl-data-table__cell--non-numeric">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore consectetur adipiscing elit.</td>
        <td class="mdl-data-table__cell--non-numeric">Thumbnail</td>
        <td class="mdl-data-table__cell--non-numeric">View | Edit | Delete</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">2</td>
        <td class="mdl-data-table__cell--non-numeric">Article Title</td>
        <td class="mdl-data-table__cell--non-numeric">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore consectetur adipiscing elit.</td>
        <td class="mdl-data-table__cell--non-numeric">Thumbnail</td>
        <td class="mdl-data-table__cell--non-numeric">View | Edit | Delete</td>
      </tr>
      <tr>
        <td class="mdl-data-table__cell--non-numeric">3</td>
        <td class="mdl-data-table__cell--non-numeric">Article Title</td>
        <td class="mdl-data-table__cell--non-numeric">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore consectetur adipiscing elit.</td>
        <td class="mdl-data-table__cell--non-numeric">Thumbnail</td>
        <td class="mdl-data-table__cell--non-numeric">View | Edit | Delete</td>
      </tr>
    </tbody>
  </table>    
  </div>
  </div>
</main>
</div>