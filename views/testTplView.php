<html>
   
    <head>
    <title> {{title}} </title>
    </head>
    <body>
        <hr/>
        This is a variable : {{sample}}
        <br/>

        This is a dynamic content from model: {{modelData}} 
        <hr/>
        <h4>Loop : testArray</h4>

        {{loop}}
        array inside loop(output first,second,third) <b>{{testArray}}</b> <br/>
            
        {{/loop}}
        <hr/>

        This is an array(array without loop): {{testArray}}

        <hr/>
        this is php(real php script): <?php $va = "hello this generated by php";
echo $va; ?>
        <hr/>
        <h3>Another testArray1</h3>
        {{loop}}
        sample content2 <b>{{testArray1}}</b> <br/>
        {{/loop}}
        <hr/>
        <h4>testArray2 - Associative array</h4>
        {{loop}}
        
        myname <b>{{testArray2.name}}</b> <br/>
        myage <b>{{testArray2.age}}</b> <br/>
        mylocation <b>{{testArray2.location}}</b> <br/>
        ----------------------------------------------- <br/>
 
        {{/loop}}

    </body>

</html>