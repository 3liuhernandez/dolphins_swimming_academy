@extends('admin.layouts.main')

@section('body')
    <div class="container-fluid flex-grow-1 d-flex flex-column flex-sm-row overflow-auto">
    <div class="row flex-grow-sm-1 flex-grow-0">
        
        <aside class="col-sm-3 col-lg-2 flex-grow-sm-1 flex-shrink-1 flex-grow-0 sticky-top p-0 pb-3 pb-lg-0">
            <div class="bg-light border border-top-0 p-1 h-100 sticky-top">
                <ul class="nav nav-pills flex-sm-column flex-row mb-auto justify-content-between p-md-3">
                    <li class="nav-item mb-md-3 active">
                        <a href="#" class="nav-link">
                            <i class="bi bi-house h4 me-3"></i>
                            <span class="d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item mb-md-3">
                        <a href="#" class="nav-link">
                            <i class="bi bi-speedometer h4 me-3"></i>
                            <span class="d-none d-sm-inline">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item mb-md-3">
                        <a href="#" class="nav-link">
                            <i class="bi bi-card-text h4 me-3"></i>
                            <span class="d-none d-sm-inline">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item mb-md-3">
                        <a href="#" class="nav-link">
                            <i class="bi bi-bricks h4 me-3"></i>
                            <span class="d-none d-sm-inline">Products</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">
                            <i class="bi bi-people h4 me-3"></i>
                            <span class="d-none d-sm-inline">Customers</span> 
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        
        <main class="col col-lg-10 overflow-auto h-100 p-4">
            <div class="bg-light border p-4">
                <h2>Main</h2>
                
                <p>
                    Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch.
                    Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag.
                    Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag.
                    Tofu YOLO Etsy, direct trade ethical Odd Future jean shorts paleo. 
                    Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh synth chillwave meditation.
                    Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master cleanse hella DIY 90's blog.
                </p>
                
                <p>
                    Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes 
                    Anderson wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb 
                    readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. Helvetica cray plaid, 
                    vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. Banh mi McSweeney's Shoreditch selfies, 
                    forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art party Portland.
                </p>
                
                <hr/>
                
                <h4>More content...</h4>
                
                <p>
                    Ethical Kickstarter PBR asymmetrical lo-fi. Dreamcatcher street art Carles, stumptown gluten-free Kickstarter artisan Wes Anderson
                    wolf pug. Godard sustainable you probably haven't heard of them, vegan farm-to-table Williamsburg slow-carb 
                    readymade disrupt deep v. Meggings seitan Wes Anderson semiotics, cliche American Apparel whatever. 
                    Helvetica cray plaid, vegan brunch Banksy leggings +1 direct trade. Wayfarers codeply PBR selfies. 
                    Banh mi McSweeney's Shoreditch selfies, forage fingerstache food truck occupy YOLO Pitchfork fixie iPhone fanny pack art 
                    party Portland.
                </p>
                
                <hr />
                
                <h4>More content...</h4>
                
                <p>
                    Sriracha biodiesel taxidermy organic post-ironic, Intelligentsia salvia mustache 90's code editing brunch. 
                    Butcher polaroid VHS art party, hashtag Brooklyn deep v PBR narwhal sustainable mixtape swag wolf squid tote bag. 
                    Tote bag cronut semiotics, raw denim deep v taxidermy messenger bag. Tofu YOLO Etsy, direct trade ethical Odd Future 
                    jean shorts paleo. Forage Shoreditch tousled aesthetic irony, street art organic Bushwick artisan cliche semiotics ugh 
                    synth chillwave meditation. Shabby chic lomo plaid vinyl chambray Vice. Vice sustainable cardigan, Williamsburg master 
                    cleanse hella DIY 90's blog.
                </p>
            
            </div>
        </main>
    </div>
</div>
@endsection
