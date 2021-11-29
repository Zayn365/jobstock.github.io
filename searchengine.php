<style>
    #bar {
        width: 200px;
        height: 30px;
        border-radius: 12px;
        border: none;
        padding-right: 8px;
        padding-top: 5px;
        text-align: center;
        padding-bottom: 0px;
        background-color: #F5F5F5;
        margin: auto;
        cursor: pointer;
        margin-top: 4px;
    }

    #bar:focus {
        width: 270px;
        transition: ease-in-out 0.5s;
        color: green;
    }

    #btn12 {
        width: 35px;
        height: 30px;
        border: none;
        /* border-radius: 150px !important; */
        margin: auto;
        /* padding-top: 10px; */
        background-color: transparent;



    }
</style>
<!-- search engine -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">




            <form method="post" action="search.php">


                <input type="text" name="search" id="bar" value="" placeholder="Search">

                <button type="submit" id="btn12" class="" name="btnsearch" value="Search">
                    <i class="fa fa-search fa-2x align-center" style="color:  #11b719 !important;"></i>
                </button>
            </form>
        </div>
    </div>
</div>