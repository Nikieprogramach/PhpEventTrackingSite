function openFiltersMenu(){
    if(document.getElementById('filtersMenu').className == "filtersMenu notVisible"){
        document.getElementById('filtersMenu').className = "filtersMenu"
    }else{
        document.getElementById('filtersMenu').className = "filtersMenu notVisible"
    }
}

function expandFilter(className){
    if(document.getElementById(className).className == `subFilterDropdown notVisible`){
        document.getElementById(className).className = `subFilterDropdown`
    }else{
        document.getElementById(className).className = `subFilterDropdown notVisible`
    }
}