// Initialize AG-Grid
var gridOptions6 = {
    columnDefs: [
      {
        headerName: 'LOST ITEM INFORMATION',
        children: [
          { headerName: 'ITEM', field: 'item' },
          { headerName: 'FOUND BY', field: 'foundby' },
          { headerName: 'FOUND IN', field: 'foundin' },
          { headerName: 'DATE', field: 'date' },
        ],
      }
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
    fetch('api/get_lost_data.php') // Replace with your server-side endpoint
      .then(response => response.json())
      .then(data => {
        gridOptions6.api.setRowData(data);
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  }
  
  // Reference to the search input field
  var searchInput = document.querySelector('#search-input');
  
  // Function to filter the grid data based on the search input
  function filterData(searchText) {
    gridOptions6.api.setQuickFilter(searchText);
  }
  
  // Add an event listener to the search input
  searchInput.addEventListener('input', function(event) {
    var searchText = event.target.value;
    filterData(searchText);
  });
  
  // Call the function to fetch and populate data when the page loads
  document.addEventListener('DOMContentLoaded', function() {
    var gridDivLost = document.querySelector('#gridLost');
    new agGrid.Grid(gridDivLost, gridOptions6);
  
    // Fetch and populate data
    fetchAndPopulateData();
  });