$(document).ready(function() {
       var items = [];
       var i = 0;
       var airtable_read_endpoint = "https://api.airtable.com/v0/appMB8tOJPyk2Vf3e/Imported%20table?api_key=keyBadmTVmE3SwXQR";
       var dataSet = [];
       $.getJSON(airtable_read_endpoint, function(result) {
              $.each(result.records, function(key,value) {
                  items = [];
                      items.push(value.fields.Title);
                      items.push(value.fields.Author);
                      items.push(value.fields.Postdate);
                      items.push(value.fields.View);
                      items.push(value.fields.Reply);
                      items.push(value.fields.posturl);

                      dataSet.push(items);
               }); // end .each
            $("#example").DataTable( {
                data: dataSet,
                retrieve: true,
                columns: [
                    { title: "Title",
                      defaultContent:""},
                  { title: "Author",
                        defaultContent:""},
                    { title: "Postdate",
                      defaultContent:"" },
                    { title: "View",
                      defaultContent:""},
                      { title: "Reply",
                        defaultContent:""},
                        { title: "posturl",
                        defaultContent:""},

                  ],

                  initComplete: function () {
                              this.api().columns().every( function () {
                                  var column = this;
                                  var select = $('<select><option value=""></option></select>')
                                      .appendTo( $(column.header()).empty() )
                                      .on( 'change', function () {
                                          var val = $.fn.dataTable.util.escapeRegex(
                                              $(this).val()
                                          );

                                          column
                                              .search( val ? '^'+val+'$' : '', true, false )
                                              .draw();
                                      } );

                                  column.data().unique().sort().each( function ( d, j ) {
                                      select.append( '<option value="'+d+'">'+d+'</option>' )
                                  } );
                              } );
                          }



                              } );
                         }); // end .getJSON
  } );
