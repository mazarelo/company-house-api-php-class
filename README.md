# company-house-api-php-class
API Wrapper for Company house

##Query a list of companies that contain the query: 
```
// pass item per page has a parameter
$companies = new CompanyHouse(50);
$results = $companies->query("Nike");

print($results);
```
##output example:
```
{
    "total_results": 479,
    "items_per_page": 20,
    "kind": "search#all",
    "page_number": 1,
    "items": [
        {
            "address": {
                "country": "CV22 7EJ",
                "premises": "288",
                "address_line_1": "Bilton Road",
                "locality": "Rugby",
                "region": "Warwickshire"
            },
            "date_of_birth": {
                "month": 12,
                "year": 1959
            },
            "address_snippet": "288 Bilton Road, Rugby, Warwickshire, United Kingdom, CV22 7EJ",
            "snippet": "",
            "matches": {
                "title": [
                    11,
                    14
                ],
                "snippet": [

                ]
            },
            "description": "Total number of appointments 1 - Born December 1959",
            "kind": "searchresults#officer",
            "links": {
                "self": "\/officers\/qE-hxeAneANEGQ06NiIPncK_Q6g\/appointments"
            },
            "title": "Carol Ann NIKE",
            "description_identifiers": [
                "appointment-count",
                "born-on"
            ],
            "appointment_count": 1
        },
        {
            "links": {
                "self": "\/officers\/fN6fcSvS2s0qKnqBOe3dW3NF74c\/appointments"
            },
            "description_identifiers": [
                "appointment-count",
                "born-on"
            ],
            "title": "Charles NIKE",
            "appointment_count": 2,
            "snippet": "",
            "matches": {
                "title": [
                    9,
                    12.........
```
##Get Company info: 
```
$companies = new CompanyHouse();
$id = 5612312 //this is a random number
$results = $companies->find($id);

print($results);
```
