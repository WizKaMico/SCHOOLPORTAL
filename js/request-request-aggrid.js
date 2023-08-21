// Initialize AG-Grid
var gridOptions4 = {
    columnDefs: [
      {
        headerName: 'REQUEST INFORMATION',
        children: [
          { headerName: 'REQUEST TYPE', field: 'request_type' },
          { headerName: 'DATE REQUESTED', field: 'date_requested' },
          { headerName: 'STATUS', field: 'status' },
        ],
      },
      {
        headerName: 'REQUESTOR',
        children: [
          { headerName: 'FIRSTNAME', field: 'fname' },
          { headerName: 'MIDDLENAME', field: 'mname' },
          { headerName: 'LASTNAME', field: 'lname' },
          { headerName: 'GRADE', field: 'level' },
        ],
      },
      // Add more header groups or columns as needed
    ],
    defaultColDef: {
      resizable: true,
      suppressSizeToFit: true,
      width: 200,
      enableRowGroup: true,
      enablePivot: true,
      enableValue: true,
    },
    rowData: [], // Initial empty data
    // Other AG-Grid configuration options
  };
  
  

// Fetch data from the server and populate the grid
function fetchAndPopulateData() {
    fetch('api/get_request_data.php') // Replace with your server-side endpoint
      .then(response => response.json())
      .then(data => {
        gridOptions4.api.setRowData(data);
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  }
  
  // Reference to the search input field
  var searchInput = document.querySelector('#search-input');
  
  // Function to filter the grid data based on the search input
  function filterData(searchText) {
    gridOptions4.api.setQuickFilter(searchText);
  }
  
  // Add an event listener to the search input
  searchInput.addEventListener('input', function(event) {
    var searchText = event.target.value;
    filterData(searchText);
  });
  
  // Call the function to fetch and populate data when the page loads
  document.addEventListener('DOMContentLoaded', function() {
    var gridDivRequest = document.querySelector('#gridRequest');
    new agGrid.Grid(gridDivRequest, gridOptions4);
  
    // Fetch and populate data
    fetchAndPopulateData();
  });