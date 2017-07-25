@extends('user.layouts.layout')
@extends('user.sections.sidebar')
@extends('user.sections.navigation')
@section('title', 'Dashboard')
@section('add-menu')
@endsection

@section('content')
<div class="wrapper wrapper-content text-center width-90 content_center">
    <h1>New Application Test</h1>

    <form action="" method="post"  ng-app="myapp">
        <div class="form-group">
            <input type="text" name="name" value="" placeholder="Name" ng-model="name">
        </div>
        <div class="form-group">
            <input type="text" name="school" value="" placeholder="School" ng-model="school">
        </div>
        <div class="form-group">
            <label>Occupied</label>
            <label>
                <input type="radio" name="occupied" value="Yes" checked ng-model="occupied">
                Yes
            </label>
            <label>
                <input type="radio" name="occupied" value="No" ng-model="occupied">
                No    
            </label>
            
        </div>
        <div class="form-group">
            <label>Occupied By</label>
            <label>
                <input type="radio" name="occupied_by" value="Owner" checked ng-model="occupiedBy">
                Owner    
            </label>
            <label>
                <input type="radio" name="occupied_by" value="Tenant" ng-model="occupiedBy">
                Tenant    
            </label>
        </div>
        <div class="form-group">
            <h3>TENANT PLACEMENT SERVICES</h3>
            <label>
                <input data-target="me" type="checkbox" value="Tenant Placement" data-name="tenant_placement[]" data-number="1" checked data-price="2%">
                Tenant Placement   
            </label>
            <ul>
            <li>
                <input  level="childParent" class="liChild" data-target="me" type="checkbox" value="Property Showings" data-name="tenant_placement[]" data-number="2" checked data-price="">
                Property Showings 
            <ul>
            <li>
                <input  level="child" class="liChild" data-target="me" type="checkbox" value="3 additional after 5PM" data-name="tenant_placement[]" data-number="3" checked data-price="100">
                3 additional after 5PM  
            </li>
            <li>
                <input  level="child" class="liChild" data-target="me" type="checkbox" value="2 additional on weekend" data-name="tenant_placement[]" data-number="4" data-price="200">
                2 additional on weekend
            </li>
            <li>
                <input  level="child" class="liChild" data-target="me" type="checkbox" value="Included Property Showings" data-name="tenant_placement[]" data-number="5" data-price="300">
                Included Property Showing
            </li>
            </ul>
            </li>
            </ul>
        </div>
        

        <ul id="final_services" class="final">
            <li>Name: <% name %></li>
            <li>School: <% school %></li>
            <li>Occupied: <% occupied %></li>
            <li>Occupied By: <% occupiedBy %></li>
        </ul>
    </form>
    <br><br>
</div>
@endsection


@section('js')
<script src="assets/user/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="assets/user/js/bootstrap-datepicker.js"></script>
<script src="assets/user/js/lib/validation/formvalidation.js"></script>
<script src="assets/user/js/jquery.validate.unobtrusive.min.js"></script>
<script type="text/javascript">
    var sampleApp = angular.module('myapp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

    $('[data-target=me]').on('change', function(){
        if($(this).prop("checked") == true){
            var val = $(this).val();
            var price = $(this).data('price');
            var name = $(this).data('price');
            var num = $(this).data('number');
            var elem = '<li data-number="'+num+'"><input class="remove_me" name="'+name+'" type="checkbox" checked>'+ val +'price: '+ price + '</li>';
            $('#final_services').append(elem);
        } else {
            var num = $(this).data('number');
            $('#final_services').find('li[data-number="'+num+'"]').remove();
        }
    });
    $('body').on('click', '.remove_me', function(){
        var num = $(this).parent().data('number');
        $(this).parent().remove();
        $('input[data-number="'+num+'"]').prop("checked", false);
    })
</script>
<!--script type="text/javascript">
   $('input.liChild').change(function() {
    $(this).closest('ul')
           .siblings('input:checkbox')
           .prop('checked', $(this).closest('ul')
                           .children()
                           .children('input:checkbox')
                           .is(':checked'))
   .first().change();
}); 

</script-->
<script>
    $('input[type=checkbox][level="childParent"]').click(function (event) {
        var checked = $(this).is(':checked');
        if (checked) {
          console.log("checked");
        } else { //for click child to uncheck subchild
            $(this).parent().find('input[type=checkbox][level="child"]').prop('checked', false);
            var num = $("#final_services li").data('number');
            $('li[data-number="'+num+'"]').remove();
             }
});

</script>
@endsection