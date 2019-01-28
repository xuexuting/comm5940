$(document).ready(function() {
       var items = [];
       var i = 0;
       var airtable_read_endpoint = "https://api.airtable.com/v0/appAgox3WPwODsSrr/Plant?api_key=keyBadmTVmE3SwXQR";
       var dataSet = [];
       $.getJSON(airtable_read_endpoint, function(result) {
              $.each(result.records, function(key,value) {
                  items = [];
                      items.push(value.fields.Plant_Name);
                      items.push('<td><img src="' + value.fields.Images + '" style="width: 80px;"/></td>');
                      items.push(value.fields.Plant_Size_copy);
                      items.push(value.fields.Plant_Price_copy);
                      items.push(value.fields.Difficulty_Copy);
                      items.push(value.fields.Light_Level_Copy);
                      items.push(value.fields.Pet_Friendly_Copy);

                      dataSet.push(items);
               }); // end .each
            $("#example").DataTable( {
                data: dataSet,
                retrieve: true,
                columns: [
                    { title: "Plant Name",
                      defaultContent:""},
                  { title: "Plant Images",
                        defaultContent:""},
                    { title: "Plant Size",
                      defaultContent:"" },
                    { title: "Plant Price",
                      defaultContent:""},
                      { title: "Difficulty",
                        defaultContent:""},
                        { title: "Light Level",
                            defaultContent:""},
                            { title: "Pet Friendly",
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
