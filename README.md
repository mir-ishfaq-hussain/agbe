# City List with Dynamic Dropdowns and DataTables

This Laravel project implements a registration form with dynamic dropdowns for Country, State, and City using AJAX. After the user logs in, a list of cities is displayed using jQuery DataTables. The data for the cities is fetched from the database using `yajra/laravel-datatables-oracle`.

## Features
1. **Dynamic Country, State, and City Selection**: 
   - The user can select a country, and the state dropdown is dynamically populated with states belonging to the selected country.
   - After selecting a state, the city dropdown is dynamically populated with cities belonging to the selected state.
   - AJAX is used to fetch the states and cities from the database without refreshing the page.

2. **City List Display After Login**:
   - Upon successful login, the user can view a list of cities along with their associated states and countries.
   - The city list is displayed using **jQuery DataTables**, and data is fetched via AJAX from the `cities` table.
   - The city list contains the following columns:
     - City
     - State
     - Country

## Setup

### Requirements
- Laravel 9.x
- PHP 8.x
- Composer
- MySQL (or any supported database)

### Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-repo/project.git
   cd project
