<html>
  <body>
    <h2 class="subtitle">Gallery</h2>
    <br />
    <table class="form">
      <tr>
        <td></td>
      </tr>
    </table>

    <script>
      $(document).ready(function() {
        $("td").nanogallery2({
          // ### gallery settings ###
          thumbnailHeight: "auto",
          thumbnailWidth: 200,
          thumbnailBorderHorizontal: 0,
          thumbnailBorderVertical: 0,
          thumbnailDisplayTransition: "slideDown",
          thumbnailDisplayTransitionDuration: 500,
          thumbnailDisplayInterval: 30,
          itemsBaseURL: "assets/img/galeri/",

          // ### gallery content ###
          items: [
            {
              src: "(1).jpeg",
              srct: "(1).jpeg",
              title: "Graduation"
            },
            {
              src: "(2).jpeg",
              srct: "(2).jpeg",
              title: "Malang Rural Bank"
            },
            {
              src: "(3).jpeg",
              srct: "(3).jpeg",
              title: "Happy Birthday :)"
            },
            {
              src: "(8).jpg",
              srct: "(8).jpg",
              title: "Goes to Regional LKS"
            },
            {
              src: "(6).jpeg",
              srct: "(6).jpeg",
              title: "Regional LKS"
            },
            {
              src: "(4).jpeg",
              srct: "(4).jpeg",
              title: "Hea Crew"
            },
            {
              src: "(5).jpeg",
              srct: "(5).jpeg",
              title: "Hea Crew too"
            }
          ]
        });
      });
    </script>
  </body>
</html>
