<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script type="text/javascript">
    
    </script>
    <style>
        
        body 
        {
            background-color: black;
            color: white;
            position:relative;
        }
       
        .content
        {
            width:315px;
            margin-left:auto;
            margin-right:auto;
        }
        .player
        {
            width:90%;
            border:1px white solid;
            float:clear;
            height:275px;
            width:100%;
        }
        #pOne
        {
            background: red;
            -moz-transform: scale(-1, -1);
            -webkit-transform: scale(-1, -1);
            -o-transform: scale(-1, -1);
            -ms-transform: scale(-1, -1);
            transform: scale(-1, -1);
           
        }
        #pTwo
        {
            background: blue;
            
        }
        .updown, .counter
        {
            float:left;
            text-align:center;
            font-size:150px;
            padding: 50px 0;
        }
        .updown
        {
            width:25%;
        }
        .counter
        {
            width:50%;
        }
        #reset
        {
            font-size:100px;
            text-align:center;
            padding-top:25%;
        }

    </style>
    
</head>
<body>
    <div ng-app="mtgCounter" ng-controller="mtgCtrl" class="content">
        <div class="player" name="pOne" id="pOne">
            <div ng-click="pOneCouter = pOneCouter - 1" class="updown">&darr;</div>
            <div class="counter">{{ pOneCouter }}</div>
            <div ng-click="pOneCouter = pOneCouter + 1" class="updown">&uarr;</div>
        </div>
        <div class="player" name="pTwo" id="pTwo">
            <div ng-click="pTwoCouter = pTwoCouter + 1" class="updown">&uarr;</div>
            <div class="counter">{{ pTwoCouter }}</div>
            <div ng-click="pTwoCouter = pTwoCouter - 1" class="updown">&darr;</div>
        </div>
        <div class="player" name="pReset" id="pReset">
            <div name="reset" id="reset" ng-click="ResetCounter()"><span>Reset</span></div>
        </div>
    </div>
</body>

<script>
var app = angular.module('mtgCounter', []);

app.controller('mtgCtrl', function($scope) {
    $scope.pOneCouter = 20;
    $scope.pTwoCouter = 20;

    $scope.ResetCounter = function()
    {
        $scope.pOneCouter = 20;
        $scope.pTwoCouter = 20;
    }
});
</script>
</html>