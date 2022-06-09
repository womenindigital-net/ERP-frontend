@extends('layouts.master')
@section('title') @lang('translation.Starter_Page') @endsection
@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Table css -->
<link href="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Sweet Alert-->
<link href="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') DashBoard @endslot
@slot('title')ACCOUNTING > PRODUCT @endslot
@endcomponent

<div class="row">
  <div class="col-xl-12">
      <div class="card">
          <div class="card-body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                          <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                          <span class="d-none d-sm-block">Product Setup</span>    
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                          <span class="d-none d-sm-block">Product List</span>    
                      </a>
                  </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content text-muted">
                  <div class="tab-pane active " id="home" role="tabpanel "> 
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="card ms-0">
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted mt-4">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                             <div class="row">
                                               <div class="col-6">
                                                 <div class="row">
                                                   <div class="col-12">
                                                      <div class="row mt-3">
                                                        <div class="col-md-12">
                                                          <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Code</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <input list="ItemCode" name="ItemCode" id="ItemCodeiId" 
                                                                class="form-control strip-tags input-border" 
                                                                onchange="getItemInfo(this)" placeholder="Product code here"
                                                                required="" value="">
                                                                <datalist id="ItemCode" class="ItemCode">
                                                                  <option>AB-001</option>
                                                                  <option>AC-001</option>
                                                                  <option>AC-002</option>
                                                                  <option>AC-003</option>
                                                                  <option>AC-004</option>
                                                                  <option>AC-005</option>
                                                                  <option>AC-006</option>
                                                                  <option>AC-007</option>
                                                                  <option>AC-008</option>
                                                                  <option>AC-009</option>
                                                                  <option>AC-010</option>
                                                                  <option>AC-011</option>
                                                                  <option>AC-012</option>
                                                                  <option>AC-013</option>
                                                                  <option>AC-014</option>
                                                                  <option>AFG - 0001</option>
                                                                  <option>B00-13</option>
                                                                  <option>B00-14</option>
                                                                  <option>B00-15</option>
                                                                  <option>Battery-0001</option>
                                                                  <option>BC-001</option>
                                                                  <option>BD-0054</option>
                                                                  <option>BD-0055</option>
                                                                  <option>BD-0056</option>
                                                                  <option>BD-0057</option>
                                                                  <option>BD-0058</option>
                                                                  <option>BD-0059</option>
                                                                  <option>BD-0060</option>
                                                                  <option>BD-0061</option>
                                                                  <option>BD-0062</option>
                                                                  <option>BD-0063</option>
                                                                  <option>BD-0064</option>
                                                                  <option>BD-0065</option>
                                                                  <option>BD-0066</option>
                                                                  <option>BD-0067</option>
                                                                  <option>BD-0068</option>
                                                                  <option>BD-0069</option>
                                                                  <option>BD-0070</option>
                                                                  <option>BD-0071</option>
                                                                  <option>BD-0072</option>
                                                                  <option>BD-0075</option>
                                                                  <option>BD-0076</option>
                                                                  <option>BD-0077</option>
                                                                  <option>BD-0078</option>
                                                                  <option>BD-0079</option>
                                                                  <option>BD0001</option>
                                                                  <option>BD0002</option>
                                                                  <option>BD0003</option>
                                                                  <option>BD0004</option>
                                                                  <option>BD0005</option>
                                                                  <option>BD0006</option>
                                                                  <option>BD0007</option>
                                                                  <option>BD0008</option>
                                                                  <option>BD0009</option>
                                                                  <option>BD0010</option>
                                                                  <option>BD0012</option>
                                                                  <option>BD0013</option>
                                                                  <option>BD0014</option>
                                                                  <option>BD0015</option>
                                                                  <option>BD0016</option>
                                                                  <option>BD0019</option>
                                                                  <option>BD0020</option>
                                                                  <option>BD0021</option>
                                                                  <option>BD0022</option>
                                                                  <option>BD0024</option>
                                                                  <option>BD0026</option>
                                                                  <option>BD0027</option>
                                                                  <option>BD0029</option>
                                                                  <option>BD0030</option>
                                                                  <option>BD0031</option>
                                                                  <option>BD0032</option>
                                                                  <option>BD0033</option>
                                                                  <option>BD0035</option>
                                                                  <option>BD0036</option>
                                                                  <option>BD0037</option>
                                                                  <option>BD0038</option>
                                                                  <option>BD0039</option>
                                                                  <option>BD0040</option>
                                                                  <option>BD0041</option>
                                                                  <option>BD0042</option>
                                                                  <option>BD0044</option>
                                                                  <option>BD0045</option>
                                                                  <option>BD0046</option>
                                                                  <option>BD0047</option>
                                                                  <option>BD0048</option>
                                                                  <option>BD0049</option>
                                                                  <option>BD0050</option>
                                                                  <option>BD0051</option>
                                                                  <option>BD0052</option>
                                                                  <option>BD0053</option>
                                                                  <option>BK - 0373</option>
                                                                  <option>BK - 0375</option>
                                                                  <option>BK - 0376</option>
                                                                  <option>BK - 0377</option>
                                                                  <option>BK- 0374</option>
                                                                  <option>BK-0351</option>
                                                                  <option>bk-0361</option>
                                                                  <option>bk-0362</option>
                                                                  <option>bk-0363</option>
                                                                  <option>bk-0364</option>
                                                                  <option>bk-0366</option>
                                                                  <option>bk-0367</option>
                                                                  <option>bk-0368</option>
                                                                  <option>bk-0369</option>
                                                                  <option>bk-0370</option>
                                                                  <option>BK0001</option>
                                                                  <option>BK0002</option>
                                                                  <option>BK0003</option>
                                                                  <option>BK0004</option>
                                                                  <option>BK0005</option>
                                                                  <option>BK0006</option>
                                                                  <option>BK0007</option>
                                                                  <option>BK0008</option>
                                                                  <option>BK0009</option>
                                                                  <option>BK0010</option>
                                                                  <option>BK0011</option>
                                                                  <option>BK0012</option>
                                                                  <option>BK0013</option>
                                                                  <option>BK0015</option>
                                                                  <option>BK0016</option>
                                                                  <option>BK0017</option>
                                                                  <option>BK0018</option>
                                                                  <option>BK0019</option>
                                                                  <option>BK0020</option>
                                                                  <option>BK0021</option>
                                                                  <option>BK0022</option>
                                                                  <option>BK0023</option>
                                                                  <option>BK0024</option>
                                                                  <option>BK0025</option>
                                                                  <option>BK0026</option>
                                                                  <option>BK0027</option>
                                                                  <option>BK0028</option>
                                                                  <option>BK0029</option>
                                                                  <option>BK0030</option>
                                                                  <option>BK0031</option>
                                                                  <option>BK0032</option>
                                                                  <option>BK0033</option>
                                                                  <option>BK0034</option>
                                                                  <option>BK0035</option>
                                                                  <option>BK0036</option>
                                                                  <option>BK0037</option>
                                                                  <option>BK00371</option>
                                                                  <option>BK00372</option>
                                                                  <option>BK00373</option>
                                                                  <option>BK0038</option>
                                                                  <option>BK0039</option>
                                                                  <option>BK0041</option>
                                                                  <option>BK0042</option>
                                                                  <option>BK0043</option>
                                                                  <option>BK0045</option>
                                                                  <option>BK0046</option>
                                                                  <option>BK0047</option>
                                                                  <option>BK0048</option>
                                                                  <option>BK0049</option>
                                                                  <option>BK0050</option>
                                                                  <option>BK0051</option>
                                                                  <option>BK0052</option>
                                                                  <option>BK0054</option>
                                                                  <option>BK0055</option>
                                                                  <option>BK0056</option>
                                                                  <option>BK0057</option>
                                                                  <option>BK0058</option>
                                                                  <option>BK0059</option>
                                                                  <option>BK0060</option>
                                                                  <option>BK0061</option>
                                                                  <option>BK0062</option>
                                                                  <option>BK0063</option>
                                                                  <option>BK0064</option>
                                                                  <option>BK0065</option>
                                                                  <option>BK0066</option>
                                                                  <option>BK0067</option>
                                                                  <option>BK0068</option>
                                                                  <option>BK0069</option>
                                                                  <option>BK0070</option>
                                                                  <option>BK0071</option>
                                                                  <option>BK0072</option>
                                                                  <option>BK0073</option>
                                                                  <option>BK0074</option>
                                                                  <option>BK0075</option>
                                                                  <option>BK0076</option>
                                                                  <option>BK0077</option>
                                                                  <option>BK0078</option>
                                                                  <option>BK0079</option>
                                                                  <option>BK0080</option>
                                                                  <option>BK0081</option>
                                                                  <option>BK0082</option>
                                                                  <option>BK0083</option>
                                                                  <option>BK0084</option>
                                                                  <option>BK0085</option>
                                                                  <option>BK0086</option>
                                                                  <option>BK0087</option>
                                                                  <option>BK0091</option>
                                                                  <option>BK0092</option>
                                                                  <option>BK0093</option>
                                                                  <option>BK0094</option>
                                                                  <option>BK0095</option>
                                                                  <option>BK0096</option>
                                                                  <option>BK0097</option>
                                                                  <option>BK0098</option>
                                                                  <option>BK0099</option>
                                                                  <option>BK0100</option>
                                                                  <option>BK0101</option>
                                                                  <option>BK0102</option>
                                                                  <option>BK0103</option>
                                                                  <option>BK0104</option>
                                                                  <option>BK0105</option>
                                                                  <option>BK0106</option>
                                                                  <option>BK0107</option>
                                                                  <option>BK0108</option>
                                                                  <option>BK0109</option>
                                                                  <option>BK0110</option>
                                                                  <option>BK0111</option>
                                                                  <option>BK0112</option>
                                                                  <option>BK0113</option>
                                                                  <option>BK0114</option>
                                                                  <option>BK0115</option>
                                                                  <option>BK0116</option>
                                                                  <option>BK0117</option>
                                                                  <option>BK0118</option>
                                                                  <option>BK0119</option>
                                                                  <option>BK0120</option>
                                                                  <option>BK0121</option>
                                                                  <option>BK0122</option>
                                                                  <option>BK0123</option>
                                                                  <option>BK0124</option>
                                                                  <option>BK0125</option>
                                                                  <option>BK0126</option>
                                                                  <option>BK0127</option>
                                                                  <option>BK0128</option>
                                                                  <option>BK0129</option>
                                                                  <option>BK0130</option>
                                                                  <option>BK0131</option>
                                                                  <option>BK0132</option>
                                                                  <option>BK0133</option>
                                                                  <option>BK0134</option>
                                                                  <option>BK0135</option>
                                                                  <option>BK0136</option>
                                                                  <option>BK0138</option>
                                                                  <option>BK0139</option>
                                                                  <option>BK0140</option>
                                                                  <option>BK0141</option>
                                                                  <option>BK0142</option>
                                                                  <option>BK0143</option>
                                                                  <option>BK0144</option>
                                                                  <option>BK0145</option>
                                                                  <option>BK0146</option>
                                                                  <option>BK0147</option>
                                                                  <option>BK0148</option>
                                                                  <option>BK0149</option>
                                                                  <option>BK0150</option>
                                                                  <option>BK0151</option>
                                                                  <option>BK0153</option>
                                                                  <option>BK0154</option>
                                                                  <option>BK0155</option>
                                                                  <option>BK0156</option>
                                                                  <option>BK0157</option>
                                                                  <option>BK0158</option>
                                                                  <option>BK0159</option>
                                                                  <option>BK0160</option>
                                                                  <option>BK0161</option>
                                                                  <option>BK0162</option>
                                                                  <option>BK0163</option>
                                                                  <option>BK0164</option>
                                                                  <option>BK0165</option>
                                                                  <option>BK0166</option>
                                                                  <option>BK0167</option>
                                                                  <option>BK0168</option>
                                                                  <option>BK0169</option>
                                                                  <option>BK0170</option>
                                                                  <option>BK0171</option>
                                                                  <option>BK0172</option>
                                                                  <option>BK0173</option>
                                                                  <option>BK0174</option>
                                                                  <option>BK0175</option>
                                                                  <option>BK0176</option>
                                                                  <option>BK0177</option>
                                                                  <option>BK0178</option>
                                                                  <option>BK0179</option>
                                                                  <option>BK0180</option>
                                                                  <option>BK0181</option>
                                                                  <option>BK0182</option>
                                                                  <option>BK0183</option>
                                                                  <option>BK0184</option>
                                                                  <option>BK0185</option>
                                                                  <option>BK0186</option>
                                                                  <option>BK0187</option>
                                                                  <option>BK0188</option>
                                                                  <option>BK0189</option>
                                                                  <option>BK0190</option>
                                                                  <option>BK0191</option>
                                                                  <option>BK0192</option>
                                                                  <option>BK0193</option>
                                                                  <option>BK0194</option>
                                                                  <option>BK0195</option>
                                                                  <option>BK0196</option>
                                                                  <option>BK0197</option>
                                                                  <option>BK0198</option>
                                                                  <option>BK0199</option>
                                                                  <option>BK0200</option>
                                                                  <option>BK0201</option>
                                                                  <option>BK0202</option>
                                                                  <option>BK0203</option>
                                                                  <option>BK0204</option>
                                                                  <option>BK0205</option>
                                                                  <option>BK0206</option>
                                                                  <option>BK0207</option>
                                                                  <option>BK0208</option>
                                                                  <option>BK0209</option>
                                                                  <option>BK0210</option>
                                                                  <option>BK0211</option>
                                                                  <option>BK0212</option>
                                                                  <option>BK0213</option>
                                                                  <option>BK0214</option>
                                                                  <option>BK0215</option>
                                                                  <option>BK0216</option>
                                                                  <option>BK0217</option>
                                                                  <option>BK0218</option>
                                                                  <option>BK0219</option>
                                                                  <option>BK0220</option>
                                                                  <option>BK0221</option>
                                                                  <option>BK0222</option>
                                                                  <option>BK0223</option>
                                                                  <option>BK0224</option>
                                                                  <option>BK0225</option>
                                                                  <option>BK0226</option>
                                                                  <option>BK0227</option>
                                                                  <option>BK0228</option>
                                                                  <option>BK0229</option>
                                                                  <option>BK0230</option>
                                                                  <option>BK0231</option>
                                                                  <option>BK0232</option>
                                                                  <option>BK0233</option>
                                                                  <option>BK02331</option>
                                                                  <option>BK0234</option>
                                                                  <option>BK0235</option>
                                                                  <option>BK0236</option>
                                                                  <option>BK0237</option>
                                                                  <option>BK0238</option>
                                                                  <option>BK0239</option>
                                                                  <option>BK0240</option>
                                                                  <option>BK0241</option>
                                                                  <option>BK0242</option>
                                                                  <option>BK0243</option>
                                                                  <option>BK0244</option>
                                                                  <option>BK0245</option>
                                                                  <option>BK0246</option>
                                                                  <option>BK0247</option>
                                                                  <option>BK0248</option>
                                                                  <option>BK0249</option>
                                                                  <option>BK0250</option>
                                                                  <option>BK0251</option>
                                                                  <option>BK0252</option>
                                                                  <option>BK0253</option>
                                                                  <option>BK0255</option>
                                                                  <option>BK0256</option>
                                                                  <option>BK0257</option>
                                                                  <option>BK0258</option>
                                                                  <option>BK0259</option>
                                                                  <option>BK0260</option>
                                                                  <option>BK0261</option>
                                                                  <option>BK0262</option>
                                                                  <option>BK0263</option>
                                                                  <option>BK0264</option>
                                                                  <option>BK0265</option>
                                                                  <option>BK0266</option>
                                                                  <option>BK0267</option>
                                                                  <option>BK0268</option>
                                                                  <option>BK0269</option>
                                                                  <option>BK0270</option>
                                                                  <option>BK0271</option>
                                                                  <option>BK0272</option>
                                                                  <option>BK0273</option>
                                                                  <option>BK0274</option>
                                                                  <option>BK0275</option>
                                                                  <option>BK0276</option>
                                                                  <option>BK0277</option>
                                                                  <option>BK0278</option>
                                                                  <option>BK0279</option>
                                                                  <option>BK0280</option>
                                                                  <option>BK0281</option>
                                                                  <option>BK0282</option>
                                                                  <option>BK0283</option>
                                                                  <option>BK0284</option>
                                                                  <option>BK0285</option>
                                                                  <option>BK0286</option>
                                                                  <option>BK0287</option>
                                                                  <option>BK0288</option>
                                                                  <option>BK0289</option>
                                                                  <option>BK0290</option>
                                                                  <option>BK0291</option>
                                                                  <option>BK0292</option>
                                                                  <option>BK0293</option>
                                                                  <option>BK0294</option>
                                                                  <option>BK0295</option>
                                                                  <option>BK0296</option>
                                                                  <option>BK0297</option>
                                                                  <option>BK0298</option>
                                                                  <option>BK0299</option>
                                                                  <option>BK0300</option>
                                                                  <option>BK0301</option>
                                                                  <option>BK0302</option>
                                                                  <option>BK0303</option>
                                                                  <option>BK0304</option>
                                                                  <option>BK03041</option>
                                                                  <option>BK0305</option>
                                                                  <option>BK0306</option>
                                                                  <option>BK0307</option>
                                                                  <option>BK0308</option>
                                                                  <option>BK0309</option>
                                                                  <option>BK0310</option>
                                                                  <option>BK0311</option>
                                                                  <option>BK0312</option>
                                                                  <option>BK0313</option>
                                                                  <option>BK0314</option>
                                                                  <option>BK0315</option>
                                                                  <option>BK0316</option>
                                                                  <option>BK0317</option>
                                                                  <option>BK0318</option>
                                                                  <option>BK0319</option>
                                                                  <option>BK0320</option>
                                                                  <option>BK0321</option>
                                                                  <option>BK0322</option>
                                                                  <option>BK0323</option>
                                                                  <option>BK0324</option>
                                                                  <option>BK0325</option>
                                                                  <option>BK0326</option>
                                                                  <option>BK0327</option>
                                                                  <option>BK0328</option>
                                                                  <option>BK0329</option>
                                                                  <option>BK0330</option>
                                                                  <option>BK0331</option>
                                                                  <option>BK0332</option>
                                                                  <option>BK0333</option>
                                                                  <option>BK0334</option>
                                                                  <option>BK0335</option>
                                                                  <option>BK0336</option>
                                                                  <option>BK0337</option>
                                                                  <option>BK0338</option>
                                                                  <option>BK0339</option>
                                                                  <option>BK0340</option>
                                                                  <option>BK0341</option>
                                                                  <option>BK0342</option>
                                                                  <option>BK0343</option>
                                                                  <option>BK0344</option>
                                                                  <option>BK0345</option>
                                                                  <option>BK0346</option>
                                                                  <option>BK0347</option>
                                                                  <option>BK0348</option>
                                                                  <option>BK0352</option>
                                                                  <option>BK0371</option>
                                                                  <option>BK0372</option>
                                                                  <option>BM-001</option>
                                                                  <option>BN-0001</option>
                                                                  <option>BP-001</option>
                                                                  <option>BS-001</option>
                                                                  <option>BS-002</option>
                                                                  <option>BT-001</option>
                                                                  <option>C-001</option>
                                                                  <option>C-002</option>
                                                                  <option>C-003</option>
                                                                  <option>C-004</option>
                                                                  <option>C-005</option>
                                                                  <option>C-006</option>
                                                                  <option>C-007</option>
                                                                  <option>C-008</option>
                                                                  <option>C-009</option>
                                                                  <option>C-010</option>
                                                                  <option>Can-00189</option>
                                                                  <option>Can-0045</option>
                                                                  <option>Can-0079</option>
                                                                  <option>Can-0080</option>
                                                                  <option>Can-0081</option>
                                                                  <option>Can-0082</option>
                                                                  <option>Can-0083</option>
                                                                  <option>Can-0084</option>
                                                                  <option>Can-0085</option>
                                                                  <option>Can-0091</option>
                                                                  <option>Cantee-0066</option>
                                                                  <option>Cantee-0067</option>
                                                                  <option>Cantee-81</option>
                                                                  <option>Canteen</option>
                                                                  <option>Canteen-0001</option>
                                                                  <option>Canteen-0002</option>
                                                                  <option>Canteen-0003</option>
                                                                  <option>Canteen-0004</option>
                                                                  <option>Canteen-0005</option>
                                                                  <option>canteen-0045</option>
                                                                  <option>canteen-00453</option>
                                                                  <option>Canteen-0046</option>
                                                                  <option>canteen-0047</option>
                                                                  <option>Canteen-0049</option>
                                                                  <option>Canteen-0050</option>
                                                                  <option>Canteen-0051</option>
                                                                  <option>Canteen-0052</option>
                                                                  <option>canteen-0054</option>
                                                                  <option>canteen-0057</option>
                                                                  <option>Canteen-0060</option>
                                                                  <option>Canteen-0061</option>
                                                                  <option>Canteen-0062</option>
                                                                  <option>Canteen-0063</option>
                                                                  <option>Canteen-0065</option>
                                                                  <option>Canteen-0067</option>
                                                                  <option>Canteen-0068</option>
                                                                  <option>Canteen-0069</option>
                                                                  <option>Canteen-0070</option>
                                                                  <option>Canteen-0072</option>
                                                                  <option>Canteen-0073</option>
                                                                  <option>canteen-0074</option>
                                                                  <option>Canteen-0076</option>
                                                                  <option>Canteen-0077</option>
                                                                  <option>Canteen-0078</option>
                                                                  <option>Canteen-0079</option>
                                                                  <option>Canteen-0080</option>
                                                                  <option>CAT-0039</option>
                                                                  <option>CAT-0040</option>
                                                                  <option>CAT-0041</option>
                                                                  <option>CAT-0042</option>
                                                                  <option>CAT-0043</option>
                                                                  <option>CAT-0044</option>
                                                                  <option>CAT-0045</option>
                                                                  <option>CAT-0046</option>
                                                                  <option>CAT-0047</option>
                                                                  <option>CAT-0048</option>
                                                                  <option>CAT-0049</option>
                                                                  <option>CAT-0051</option>
                                                                  <option>CAT-0053</option>
                                                                  <option>CAT-0054</option>
                                                                  <option>CAT-0055</option>
                                                                  <option>CAT-0056</option>
                                                                  <option>CAT-0057</option>
                                                                  <option>CAT-0058</option>
                                                                  <option>CAT-0059</option>
                                                                  <option>CAT-0060</option>
                                                                  <option>CAT-0061</option>
                                                                  <option>CAT-0062</option>
                                                                  <option>CAt-0063</option>
                                                                  <option>CAT-0064</option>
                                                                  <option>CAT-0065</option>
                                                                  <option>CAT-0066</option>
                                                                  <option>CAT-0067</option>
                                                                  <option>CAT-0068</option>
                                                                  <option>CAT-0070</option>
                                                                  <option>CAT0001</option>
                                                                  <option>CAT0002</option>
                                                                  <option>CAT0003</option>
                                                                  <option>CAT0004</option>
                                                                  <option>CAT0005</option>
                                                                  <option>CAT0006</option>
                                                                  <option>CAT0007</option>
                                                                  <option>CAT0008</option>
                                                                  <option>CAT00081</option>
                                                                  <option>CAT0011</option>
                                                                  <option>CAT0012</option>
                                                                  <option>CAT0013</option>
                                                                  <option>CAT0014</option>
                                                                  <option>CAT0015</option>
                                                                  <option>CAT0016</option>
                                                                  <option>CAT0017</option>
                                                                  <option>CAT0018</option>
                                                                  <option>CAT0019</option>
                                                                  <option>CAT0020</option>
                                                                  <option>CAT0021</option>
                                                                  <option>CAT0022</option>
                                                                  <option>CAT0023</option>
                                                                  <option>CAT0025</option>
                                                                  <option>CAT0026</option>
                                                                  <option>CAT0027</option>
                                                                  <option>CAT0029</option>
                                                                  <option>CAT0030</option>
                                                                  <option>CAT0031</option>
                                                                  <option>CAT0032</option>
                                                                  <option>CAT0033</option>
                                                                  <option>CAT0034</option>
                                                                  <option>CAT0035</option>
                                                                  <option>CAT0036</option>
                                                                  <option>CAT0037</option>
                                                                  <option>CAT0038</option>
                                                                  <option>CAT0039</option>
                                                                  <option>CAT0040</option>
                                                                  <option>CAT0041</option>
                                                                  <option>CAT0042</option>
                                                                  <option>CAT0043</option>
                                                                  <option>CAT0044</option>
                                                                  <option>CAT0045</option>
                                                                  <option>CAT0046</option>
                                                                  <option>CAT0047</option>
                                                                  <option>CAT0048</option>
                                                                  <option>CAT0049</option>
                                                                  <option>CAT0050</option>
                                                                  <option>CAT0051</option>
                                                                  <option>CAT0052</option>
                                                                  <option>CAT0053</option>
                                                                  <option>CAT0054</option>
                                                                  <option>CAT0055</option>
                                                                  <option>CAT0056</option>
                                                                  <option>CAT0058</option>
                                                                  <option>CAT0059</option>
                                                                  <option>CAT0060</option>
                                                                  <option>CAT0061</option>
                                                                  <option>CAT0062</option>
                                                                  <option>CAT0063</option>
                                                                  <option>CAT0064</option>
                                                                  <option>CAT0065</option>
                                                                  <option>CAT0066</option>
                                                                  <option>CAT0067</option>
                                                                  <option>CAT0068</option>
                                                                  <option>CAT0069</option>
                                                                  <option>CAT0070</option>
                                                                  <option>CAT0071</option>
                                                                  <option>CAT0072</option>
                                                                  <option>CAT0073</option>
                                                                  <option>CAT0074</option>
                                                                  <option>CAT0075</option>
                                                                  <option>CAT0076</option>
                                                                  <option>CAT0077</option>
                                                                  <option>CC-001</option>
                                                                  <option>CC-002</option>
                                                                  <option>CC-003</option>
                                                                  <option>CC-004</option>
                                                                  <option>CC-005</option>
                                                                  <option>CC-006</option>
                                                                  <option>CC-007</option>
                                                                  <option>CC-008</option>
                                                                  <option>CC-009</option>
                                                                  <option>CC-010</option>
                                                                  <option>CC-011</option>
                                                                  <option>CC-012</option>
                                                                  <option>CC-013</option>
                                                                  <option>CC-014</option>
                                                                  <option>CC-015</option>
                                                                  <option>CC-016</option>
                                                                  <option>CC-017</option>
                                                                  <option>CC-018</option>
                                                                  <option>CC-019</option>
                                                                  <option>CC-020</option>
                                                                  <option>CC-021</option>
                                                                  <option>CC-022</option>
                                                                  <option>CC-023</option>
                                                                  <option>CC-024</option>
                                                                  <option>CCT-001</option>
                                                                  <option>CCT-002</option>
                                                                  <option>CCT-003</option>
                                                                  <option>CCT-004</option>
                                                                  <option>CCT-005</option>
                                                                  <option>CCT-006</option>
                                                                  <option>CCT-007</option>
                                                                  <option>CCT-008</option>
                                                                  <option>CCT-009</option>
                                                                  <option>CCT-010</option>
                                                                  <option>CCT-011</option>
                                                                  <option>CCT-012</option>
                                                                  <option>CCT-013</option>
                                                                  <option>CCT-014</option>
                                                                  <option>CCT-015</option>
                                                                  <option>CCT-016</option>
                                                                  <option>CCT-017</option>
                                                                  <option>CCT-018</option>
                                                                  <option>CCT-019</option>
                                                                  <option>CCT-020</option>
                                                                  <option>CCT-021</option>
                                                                  <option>CCT-022</option>
                                                                  <option>CCT-023</option>
                                                                  <option>CCT-024</option>
                                                                  <option>CCT-025</option>
                                                                  <option>CCT-026</option>
                                                                  <option>CCTB-0001</option>
                                                                  <option>CCTB-0002</option>
                                                                  <option>CCTB-0003</option>
                                                                  <option>CCTB-0004</option>
                                                                  <option>CCTB-0006</option>
                                                                  <option>CD-001</option>
                                                                  <option>CE-001</option>
                                                                  <option>CE-002</option>
                                                                  <option>CE-003</option>
                                                                  <option>CE-004</option>
                                                                  <option>CE-005</option>
                                                                  <option>CE-006</option>
                                                                  <option>CE-007</option>
                                                                  <option>CE-008</option>
                                                                  <option>CE-009</option>
                                                                  <option>CE-010</option>
                                                                  <option>CE-011</option>
                                                                  <option>CE-012</option>
                                                                  <option>CE-013</option>
                                                                  <option>CE-014</option>
                                                                  <option>CE-015</option>
                                                                  <option>CE-016</option>
                                                                  <option>CE-017</option>
                                                                  <option>CF-001</option>
                                                                  <option>CF-002</option>
                                                                  <option>CF-003</option>
                                                                  <option>CF-004</option>
                                                                  <option>CF-005</option>
                                                                  <option>CF-006</option>
                                                                  <option>CF-007</option>
                                                                  <option>CF-008</option>
                                                                  <option>CF-009</option>
                                                                  <option>CF-010</option>
                                                                  <option>CF-011</option>
                                                                  <option>CF-012</option>
                                                                  <option>CF-013</option>
                                                                  <option>CF-014</option>
                                                                  <option>CF-015</option>
                                                                  <option>CF-016</option>
                                                                  <option>CF-017</option>
                                                                  <option>CF-018</option>
                                                                  <option>CF-019</option>
                                                                  <option>CF-020</option>
                                                                  <option>CF-021</option>
                                                                  <option>CF-022</option>
                                                                  <option>CF-023</option>
                                                                  <option>CF-024</option>
                                                                  <option>CF-025</option>
                                                                  <option>CF-026</option>
                                                                  <option>CF-027</option>
                                                                  <option>CF-028</option>
                                                                  <option>CFT 0030</option>
                                                                  <option>CFT 0031</option>
                                                                  <option>CFT0001</option>
                                                                  <option>cft0002</option>
                                                                  <option>cft0003</option>
                                                                  <option>cft0004</option>
                                                                  <option>Cft0005</option>
                                                                  <option>cft0006</option>
                                                                  <option>cft0008</option>
                                                                  <option>cft0009</option>
                                                                  <option>cft0010</option>
                                                                  <option>cft0019</option>
                                                                  <option>cft0021</option>
                                                                  <option>cft0024</option>
                                                                  <option>cft0027</option>
                                                                  <option>CFT0032</option>
                                                                  <option>CFT30</option>
                                                                  <option>cftoo25</option>
                                                                  <option>cftooo11</option>
                                                                  <option>cftooo7</option>
                                                                  <option>CM-001</option>
                                                                  <option>COMP 0001</option>
                                                                  <option>COMP 0002</option>
                                                                  <option>COMP 0003</option>
                                                                  <option>COMP 0005</option>
                                                                  <option>COMP0012</option>
                                                                  <option>COMP0014</option>
                                                                  <option>COMP0015</option>
                                                                  <option>COMP0016</option>
                                                                  <option>COMP12</option>
                                                                  <option>Core P. 0001</option>
                                                                  <option>CP-001</option>
                                                                  <option>CP-002</option>
                                                                  <option>CP-003</option>
                                                                  <option>CP-004</option>
                                                                  <option>CP-005</option>
                                                                  <option>CP-006</option>
                                                                  <option>CP-007</option>
                                                                  <option>CP-008</option>
                                                                  <option>CP-009</option>
                                                                  <option>CP-010</option>
                                                                  <option>CP-011</option>
                                                                  <option>CP-012</option>
                                                                  <option>CP-013</option>
                                                                  <option>CP-014</option>
                                                                  <option>CP-015</option>
                                                                  <option>CP-016</option>
                                                                  <option>CP-017</option>
                                                                  <option>CP-018</option>
                                                                  <option>CP-019</option>
                                                                  <option>CP-020</option>
                                                                  <option>CP-021</option>
                                                                  <option>CP-022</option>
                                                                  <option>CP-023</option>
                                                                  <option>CP-024</option>
                                                                  <option>CP-025</option>
                                                                  <option>CP-026</option>
                                                                  <option>CP-027</option>
                                                                  <option>CP-028</option>
                                                                  <option>CP-029</option>
                                                                  <option>CP-030</option>
                                                                  <option>CP-031</option>
                                                                  <option>CP-032</option>
                                                                  <option>CP-033</option>
                                                                  <option>CP-034</option>
                                                                  <option>CP-035</option>
                                                                  <option>CP-036</option>
                                                                  <option>CP-037</option>
                                                                  <option>CP-038</option>
                                                                  <option>CP-039</option>
                                                                  <option>CP-040</option>
                                                                  <option>CP-041</option>
                                                                  <option>CP-042</option>
                                                                  <option>CP-043</option>
                                                                  <option>CP-044</option>
                                                                  <option>CP-045</option>
                                                                  <option>CP-046</option>
                                                                  <option>CP-047</option>
                                                                  <option>CP-048</option>
                                                                  <option>CP-049</option>
                                                                  <option>CP-050</option>
                                                                  <option>CP-051</option>
                                                                  <option>CP-052</option>
                                                                  <option>CP-053</option>
                                                                  <option>CP-054</option>
                                                                  <option>CP-055</option>
                                                                  <option>CP-056</option>
                                                                  <option>CP-057</option>
                                                                  <option>CP-058</option>
                                                                  <option>CP-059</option>
                                                                  <option>CP-060</option>
                                                                  <option>CP-061</option>
                                                                  <option>CP-062</option>
                                                                  <option>CP-063</option>
                                                                  <option>CP-064</option>
                                                                  <option>CP-065</option>
                                                                  <option>CP-066</option>
                                                                  <option>CP-067</option>
                                                                  <option>CP-068</option>
                                                                  <option>CR-0001</option>
                                                                  <option>CR-001</option>
                                                                  <option>CR-002</option>
                                                                  <option>CR-003</option>
                                                                  <option>CR-004</option>
                                                                  <option>CR-005</option>
                                                                  <option>CR-006</option>
                                                                  <option>CR-007</option>
                                                                  <option>CR-008</option>
                                                                  <option>CR-009</option>
                                                                  <option>CR-010</option>
                                                                  <option>CR-011</option>
                                                                  <option>CR-012</option>
                                                                  <option>CR-013</option>
                                                                  <option>CR-014</option>
                                                                  <option>CR-015</option>
                                                                  <option>CR-016</option>
                                                                  <option>CR-017</option>
                                                                  <option>CR-018</option>
                                                                  <option>CR-019</option>
                                                                  <option>CR-020</option>
                                                                  <option>CR-021</option>
                                                                  <option>CR-022</option>
                                                                  <option>CR-023</option>
                                                                  <option>CR-024</option>
                                                                  <option>CR-025</option>
                                                                  <option>CR-026</option>
                                                                  <option>CR-027</option>
                                                                  <option>CR-028</option>
                                                                  <option>CR-029</option>
                                                                  <option>CR-030</option>
                                                                  <option>CR-031</option>
                                                                  <option>CR-032</option>
                                                                  <option>CR-033</option>
                                                                  <option>CR-034</option>
                                                                  <option>CR-035</option>
                                                                  <option>CR-036</option>
                                                                  <option>CR-037</option>
                                                                  <option>CR-038</option>
                                                                  <option>CR-039</option>
                                                                  <option>CR-040</option>
                                                                  <option>CR-041</option>
                                                                  <option>CR-042</option>
                                                                  <option>CR-043</option>
                                                                  <option>CR-044</option>
                                                                  <option>CR-045</option>
                                                                  <option>CR-046</option>
                                                                  <option>CR-047</option>
                                                                  <option>CR-048</option>
                                                                  <option>CR-049</option>
                                                                  <option>CR-050</option>
                                                                  <option>CR-051</option>
                                                                  <option>CR-052</option>
                                                                  <option>CR-053</option>
                                                                  <option>CR-054</option>
                                                                  <option>CR-055</option>
                                                                  <option>CR-056</option>
                                                                  <option>CR-057</option>
                                                                  <option>CR-058</option>
                                                                  <option>CR-059</option>
                                                                  <option>CR-060</option>
                                                                  <option>CR-061</option>
                                                                  <option>CR-062</option>
                                                                  <option>CR-063</option>
                                                                  <option>CR-064</option>
                                                                  <option>CR-065</option>
                                                                  <option>CR-066</option>
                                                                  <option>CR-067</option>
                                                                  <option>CS-001</option>
                                                                  <option>CS-002</option>
                                                                  <option>CS-003</option>
                                                                  <option>CS-004</option>
                                                                  <option>CS-005</option>
                                                                  <option>CS-006</option>
                                                                  <option>CS-007</option>
                                                                  <option>CS-008</option>
                                                                  <option>CS-009</option>
                                                                  <option>CS-010</option>
                                                                  <option>CS-011</option>
                                                                  <option>CS-012</option>
                                                                  <option>CS-013</option>
                                                                  <option>CS-014</option>
                                                                  <option>CYC-001</option>
                                                                  <option>CYC-002</option>
                                                                  <option>CYC-003</option>
                                                                  <option>D-001</option>
                                                                  <option>DA-0002</option>
                                                                  <option>DA-0003</option>
                                                                  <option>DA-0004</option>
                                                                  <option>DA-0005</option>
                                                                  <option>DA-0006</option>
                                                                  <option>DC-001</option>
                                                                  <option>DC-002</option>
                                                                  <option>DC-003</option>
                                                                  <option>DC-004</option>
                                                                  <option>DC-005</option>
                                                                  <option>DC-006</option>
                                                                  <option>DC-007</option>
                                                                  <option>DC-008</option>
                                                                  <option>DC-009</option>
                                                                  <option>DC-010</option>
                                                                  <option>DC-011</option>
                                                                  <option>DC-012</option>
                                                                  <option>DC-013</option>
                                                                  <option>DC-014</option>
                                                                  <option>DC-015</option>
                                                                  <option>DC-016</option>
                                                                  <option>EkB-001</option>
                                                                  <option>Equipment-01</option>
                                                                  <option>Equipment-02</option>
                                                                  <option>F-001</option>
                                                                  <option>FA0012</option>
                                                                  <option>FA0013</option>
                                                                  <option>FA0014</option>
                                                                  <option>FA0015</option>
                                                                  <option>FB-001</option>
                                                                  <option>FD-0001</option>
                                                                  <option>FIC-001</option>
                                                                  <option>FM-001</option>
                                                                  <option>FR-001</option>
                                                                  <option>FR-002</option>
                                                                  <option>FU-0200</option>
                                                                  <option>Fur-001</option>
                                                                  <option>G-001</option>
                                                                  <option>GG-001</option>
                                                                  <option>H-001</option>
                                                                  <option>HD-001</option>
                                                                  <option>HD-002</option>
                                                                  <option>HM-001</option>
                                                                  <option>IK-0001</option>
                                                                  <option>IK-0002</option>
                                                                  <option>Ik-0003</option>
                                                                  <option>IK-0004</option>
                                                                  <option>Ik-0005</option>
                                                                  <option>Ik-0006</option>
                                                                  <option>IK-0007</option>
                                                                  <option>Ik-0009</option>
                                                                  <option>IK-0010</option>
                                                                  <option>Ik-0011</option>
                                                                  <option>IK-0012</option>
                                                                  <option>IR-001</option>
                                                                  <option>IS-001</option>
                                                                  <option>IS-002</option>
                                                                  <option>IS-003</option>
                                                                  <option>IS-004</option>
                                                                  <option>JB(m)-0002</option>
                                                                  <option>JB0001</option>
                                                                  <option>JM-001</option>
                                                                  <option>JM-002</option>
                                                                  <option>JN(L)-0001</option>
                                                                  <option>JN(L)-0002</option>
                                                                  <option>JN(L)-0003</option>
                                                                  <option>JN(L)-0004</option>
                                                                  <option>JN(L)-0005</option>
                                                                  <option>JN(S)-0001</option>
                                                                  <option>JN(S)-0002</option>
                                                                  <option>JN(S)-0003</option>
                                                                  <option>JN(S)-0004</option>
                                                                  <option>JN(S)-0005</option>
                                                                  <option>JN(S)-0006</option>
                                                                  <option>JN(S)-0007</option>
                                                                  <option>JN(S)-0008</option>
                                                                  <option>JN(S)-0009</option>
                                                                  <option>JN(S)-0010</option>
                                                                  <option>JN(S)-0011</option>
                                                                  <option>JN(S)-0012</option>
                                                                  <option>JN(S)-0013</option>
                                                                  <option>JP-001</option>
                                                                  <option>JP-004</option>
                                                                  <option>JP-005</option>
                                                                  <option>JP-006</option>
                                                                  <option>JP-007</option>
                                                                  <option>JP-008</option>
                                                                  <option>JP-009</option>
                                                                  <option>JP-011</option>
                                                                  <option>JP-013</option>
                                                                  <option>JP-014</option>
                                                                  <option>JP-015</option>
                                                                  <option>JP-017</option>
                                                                  <option>JP-020</option>
                                                                  <option>JP-022</option>
                                                                  <option>JP-023</option>
                                                                  <option>JP-024</option>
                                                                  <option>JP-028</option>
                                                                  <option>JP-029</option>
                                                                  <option>JP-030</option>
                                                                  <option>JP-031</option>
                                                                  <option>JP-032</option>
                                                                  <option>JP-033</option>
                                                                  <option>JP-034</option>
                                                                  <option>JP-035</option>
                                                                  <option>JP-036</option>
                                                                  <option>JP-037</option>
                                                                  <option>JP-038</option>
                                                                  <option>JP-040</option>
                                                                  <option>JP-041</option>
                                                                  <option>JP-042</option>
                                                                  <option>JP-043</option>
                                                                  <option>JP-044</option>
                                                                  <option>JP-045</option>
                                                                  <option>JP-046</option>
                                                                  <option>JP-047</option>
                                                                  <option>JP-048</option>
                                                                  <option>JP-049</option>
                                                                  <option>JP-050</option>
                                                                  <option>JP-051</option>
                                                                  <option>JP-052</option>
                                                                  <option>JP-053</option>
                                                                  <option>JP-054</option>
                                                                  <option>JP-055</option>
                                                                  <option>JP-056</option>
                                                                  <option>JP-057</option>
                                                                  <option>JP-058</option>
                                                                  <option>JP-060</option>
                                                                  <option>JP-061</option>
                                                                  <option>JP-062</option>
                                                                  <option>JP-063</option>
                                                                  <option>JP-064</option>
                                                                  <option>JP-065</option>
                                                                  <option>JP-066</option>
                                                                  <option>JP-067</option>
                                                                  <option>JP-071</option>
                                                                  <option>JP-072</option>
                                                                  <option>JP-073</option>
                                                                  <option>JP-074</option>
                                                                  <option>JP-075</option>
                                                                  <option>JP-076</option>
                                                                  <option>JP-077</option>
                                                                  <option>JP-078</option>
                                                                  <option>JP-079</option>
                                                                  <option>JP-080</option>
                                                                  <option>JP-081</option>
                                                                  <option>JP-082</option>
                                                                  <option>JP-084</option>
                                                                  <option>JP-085</option>
                                                                  <option>JP-086</option>
                                                                  <option>JP-088</option>
                                                                  <option>JP-089</option>
                                                                  <option>JP-090</option>
                                                                  <option>JP-091</option>
                                                                  <option>JP-093</option>
                                                                  <option>JP-094</option>
                                                                  <option>JP-095</option>
                                                                  <option>JP-096</option>
                                                                  <option>JW - 0002</option>
                                                                  <option>JW - 0003</option>
                                                                  <option>JW - 0004</option>
                                                                  <option>JW-0001</option>
                                                                  <option>Jw0112</option>
                                                                  <option>K-001</option>
                                                                  <option>KAR - 0016</option>
                                                                  <option>KAR - 0017</option>
                                                                  <option>KAR - 0018</option>
                                                                  <option>KAR - 0019</option>
                                                                  <option>KAR - 0020</option>
                                                                  <option>KAR - 0021</option>
                                                                  <option>KAR - 0022</option>
                                                                  <option>KAR - 0023</option>
                                                                  <option>KAR - 0024</option>
                                                                  <option>KAR - 0025</option>
                                                                  <option>KAR - 0026</option>
                                                                  <option>KAR - 0027</option>
                                                                  <option>KAR - 0028</option>
                                                                  <option>KAR - 0029</option>
                                                                  <option>KAR - 0030</option>
                                                                  <option>KAR - 0031</option>
                                                                  <option>KAR - 0032</option>
                                                                  <option>KAR - 0033</option>
                                                                  <option>KAR - 0034</option>
                                                                  <option>KAR - 0035</option>
                                                                  <option>KAR - 0036</option>
                                                                  <option>KAR - 0037</option>
                                                                  <option>KAR - 0038</option>
                                                                  <option>KAR - 0039</option>
                                                                  <option>KAR - 0040</option>
                                                                  <option>KAR - 0041</option>
                                                                  <option>KAR - 0042</option>
                                                                  <option>KAR - 0043</option>
                                                                  <option>KAR - 0044</option>
                                                                  <option>KAR - 0045</option>
                                                                  <option>KAR - 0046</option>
                                                                  <option>KAR - 0047</option>
                                                                  <option>KAR - 0048</option>
                                                                  <option>KAR - 0049</option>
                                                                  <option>KAR - 0050</option>
                                                                  <option>KAR - 0051</option>
                                                                  <option>KAR - 0052</option>
                                                                  <option>KAR - 0053</option>
                                                                  <option>KAR - 0054</option>
                                                                  <option>KAR - 0056</option>
                                                                  <option>KAR-DA-0001</option>
                                                                  <option>KAR0001</option>
                                                                  <option>KAR0002</option>
                                                                  <option>KAR0003</option>
                                                                  <option>KAR0004</option>
                                                                  <option>KAR0005</option>
                                                                  <option>KAR0006</option>
                                                                  <option>KAR0007</option>
                                                                  <option>KAR0008</option>
                                                                  <option>KAR0009</option>
                                                                  <option>KAR0010</option>
                                                                  <option>KAR0013</option>
                                                                  <option>KAR0014</option>
                                                                  <option>KAR0015</option>
                                                                  <option>KAR0029</option>
                                                                  <option>KAR0030</option>
                                                                  <option>KAR0032</option>
                                                                  <option>KAR0033</option>
                                                                  <option>KAR0034</option>
                                                                  <option>KAR0036</option>
                                                                  <option>KAR0037</option>
                                                                  <option>KAR0038</option>
                                                                  <option>KAR0039</option>
                                                                  <option>kAR0040</option>
                                                                  <option>KAR0041</option>
                                                                  <option>KAR0042</option>
                                                                  <option>KAR0044</option>
                                                                  <option>KAR0046</option>
                                                                  <option>KAR0048</option>
                                                                  <option>KAR0049</option>
                                                                  <option>KAR0050</option>
                                                                  <option>KAR0051</option>
                                                                  <option>KAR0052</option>
                                                                  <option>KAR0054</option>
                                                                  <option>KAR0055</option>
                                                                  <option>KAR0056</option>
                                                                  <option>KAR0057</option>
                                                                  <option>KAR0058</option>
                                                                  <option>KAR0059</option>
                                                                  <option>KAR0061</option>
                                                                  <option>KAR0062</option>
                                                                  <option>KAR011</option>
                                                                  <option>KAR035</option>
                                                                  <option>KAR036</option>
                                                                  <option>KAR038</option>
                                                                  <option>KAR039</option>
                                                                  <option>KAR040</option>
                                                                  <option>KARC - 01</option>
                                                                  <option>KARP0001</option>
                                                                  <option>KARP0002</option>
                                                                  <option>KARP0003</option>
                                                                  <option>KARP0004</option>
                                                                  <option>KARP0005</option>
                                                                  <option>KARP0007</option>
                                                                  <option>KARP0008</option>
                                                                  <option>KARP0009</option>
                                                                  <option>KARP0010</option>
                                                                  <option>KARP0011</option>
                                                                  <option>KARP0012</option>
                                                                  <option>KARP0013</option>
                                                                  <option>KARP0014</option>
                                                                  <option>KARP0016</option>
                                                                  <option>KARP0017</option>
                                                                  <option>KARP0018</option>
                                                                  <option>KARP0019</option>
                                                                  <option>KARP0021</option>
                                                                  <option>KARP0022</option>
                                                                  <option>KARP0023</option>
                                                                  <option>KARP0024</option>
                                                                  <option>KARP0025</option>
                                                                  <option>KARP0026</option>
                                                                  <option>KARP0027</option>
                                                                  <option>KARP0028</option>
                                                                  <option>KARP0029</option>
                                                                  <option>KARP0030</option>
                                                                  <option>KARP0031</option>
                                                                  <option>KARP0032</option>
                                                                  <option>KARP0033</option>
                                                                  <option>KARP0034</option>
                                                                  <option>KARP0035</option>
                                                                  <option>KARP0036</option>
                                                                  <option>KCM-001</option>
                                                                  <option>Kh-002</option>
                                                                  <option>KM-001</option>
                                                                  <option>KM-002</option>
                                                                  <option>KM-003</option>
                                                                  <option>KM-004</option>
                                                                  <option>KM-005</option>
                                                                  <option>KM-006</option>
                                                                  <option>KM-007</option>
                                                                  <option>KM-008</option>
                                                                  <option>KM-009</option>
                                                                  <option>KM-010</option>
                                                                  <option>KM-011</option>
                                                                  <option>KM-012</option>
                                                                  <option>KM-013</option>
                                                                  <option>KM-014</option>
                                                                  <option>KM-015</option>
                                                                  <option>KM-016</option>
                                                                  <option>KST-001</option>
                                                                  <option>LapTop-0001</option>
                                                                  <option>LD-001</option>
                                                                  <option>LM001</option>
                                                                  <option>LM0056</option>
                                                                  <option>LM0105</option>
                                                                  <option>LM0123</option>
                                                                  <option>LM0135</option>
                                                                  <option>LT-001</option>
                                                                  <option>LT-002</option>
                                                                  <option>LT-003</option>
                                                                  <option>LT-004</option>
                                                                  <option>LT-005</option>
                                                                  <option>LT-006</option>
                                                                  <option>M-001</option>
                                                                  <option>M-002</option>
                                                                  <option>Mask-001</option>
                                                                  <option>Mask-002</option>
                                                                  <option>Mask-003</option>
                                                                  <option>Mask-004</option>
                                                                  <option>Mask-005</option>
                                                                  <option>Mask-006</option>
                                                                  <option>Mask-007</option>
                                                                  <option>Mask-008</option>
                                                                  <option>Mask-009</option>
                                                                  <option>MG-001</option>
                                                                  <option>MP-001</option>
                                                                  <option>MP-002</option>
                                                                  <option>O-001</option>
                                                                  <option>OM-001</option>
                                                                  <option>Onl-001</option>
                                                                  <option>ORM-001</option>
                                                                  <option>P-001</option>
                                                                  <option>P-002</option>
                                                                  <option>P-003</option>
                                                                  <option>P-004</option>
                                                                  <option>Pad-0001</option>
                                                                  <option>PBSNL998</option>
                                                                  <option>PBSNL9991</option>
                                                                  <option>PC-001</option>
                                                                  <option>PD-001</option>
                                                                  <option>PD-002</option>
                                                                  <option>PF-001</option>
                                                                  <option>PM-001</option>
                                                                  <option>PM-002</option>
                                                                  <option>PR-001</option>
                                                                  <option>Pre-V007</option>
                                                                  <option>PS-001</option>
                                                                  <option>PSB-001</option>
                                                                  <option>PT0001</option>
                                                                  <option>PT00010</option>
                                                                  <option>PT00011</option>
                                                                  <option>PT00012</option>
                                                                  <option>PT00013</option>
                                                                  <option>PT00014</option>
                                                                  <option>PT00015</option>
                                                                  <option>PT0002</option>
                                                                  <option>PT0003</option>
                                                                  <option>PT0004</option>
                                                                  <option>PT0005</option>
                                                                  <option>PT0006</option>
                                                                  <option>PT0007</option>
                                                                  <option>PT0008</option>
                                                                  <option>PT0009</option>
                                                                  <option>PT0010</option>
                                                                  <option>PW0013</option>
                                                                  <option>PW0014</option>
                                                                  <option>PW0018</option>
                                                                  <option>PW0019</option>
                                                                  <option>PWRM-0001</option>
                                                                  <option>PWRM-0002</option>
                                                                  <option>PWRM-0003</option>
                                                                  <option>PWRM-0004</option>
                                                                  <option>PWRM-0006</option>
                                                                  <option>PWRM-0007</option>
                                                                  <option>PWRM-0008</option>
                                                                  <option>PWRM-0009</option>
                                                                  <option>PWRM-0010</option>
                                                                  <option>PWRM-0011</option>
                                                                  <option>PWRM-0012</option>
                                                                  <option>PWRM-0016</option>
                                                                  <option>PWRM-0022</option>
                                                                  <option>PWRM-0026</option>
                                                                  <option>PWRM-0027</option>
                                                                  <option>PWRM-0028</option>
                                                                  <option>PWRM-0029</option>
                                                                  <option>RC-001</option>
                                                                  <option>RC-002</option>
                                                                  <option>RENT-001</option>
                                                                  <option>Rep-01</option>
                                                                  <option>Rep-02</option>
                                                                  <option>Rep-03</option>
                                                                  <option>Rep-04</option>
                                                                  <option>RM-001</option>
                                                                  <option>RM0024</option>
                                                                  <option>RM007</option>
                                                                  <option>RM008</option>
                                                                  <option>RM0195</option>
                                                                  <option>Sat-0014</option>
                                                                  <option>SB-001</option>
                                                                  <option>SB-002</option>
                                                                  <option>SB-003</option>
                                                                  <option>SB-004</option>
                                                                  <option>SB-005</option>
                                                                  <option>SB-006</option>
                                                                  <option>SB-007</option>
                                                                  <option>SB-008</option>
                                                                  <option>SB-009</option>
                                                                  <option>SB-010</option>
                                                                  <option>SB-011</option>
                                                                  <option>SB-012</option>
                                                                  <option>SB-013</option>
                                                                  <option>SB-014</option>
                                                                  <option>SB-015</option>
                                                                  <option>SB-016</option>
                                                                  <option>SBM-001</option>
                                                                  <option>SBS-001</option>
                                                                  <option>SENB-001</option>
                                                                  <option>SENB-002</option>
                                                                  <option>Ser0001</option>
                                                                  <option>SG-001</option>
                                                                  <option>SG-002</option>
                                                                  <option>SH-001</option>
                                                                  <option>SH-002</option>
                                                                  <option>SH-003</option>
                                                                  <option>SH-004</option>
                                                                  <option>SH-005</option>
                                                                  <option>SH-006</option>
                                                                  <option>SH-007</option>
                                                                  <option>SH-008</option>
                                                                  <option>SH-009</option>
                                                                  <option>SH-010</option>
                                                                  <option>SH-011</option>
                                                                  <option>Slipper - 0001</option>
                                                                  <option>Slipper - 0002</option>
                                                                  <option>Slipper - 0003</option>
                                                                  <option>Slipper - 0004</option>
                                                                  <option>Slipper - 0005</option>
                                                                  <option>Slipper - 0007</option>
                                                                  <option>Slipper - 0008</option>
                                                                  <option>Slipper-0006</option>
                                                                  <option>SM-001</option>
                                                                  <option>SM-002</option>
                                                                  <option>Soft-002</option>
                                                                  <option>SR-001</option>
                                                                  <option>SR-002</option>
                                                                  <option>sta-0001</option>
                                                                  <option>Sta-0002</option>
                                                                  <option>Sta-0003</option>
                                                                  <option>Sta-0004</option>
                                                                  <option>Sta-0005</option>
                                                                  <option>Sta-0006</option>
                                                                  <option>Sta-0007</option>
                                                                  <option>Sta-0008</option>
                                                                  <option>Sta-0009</option>
                                                                  <option>Sta-0010</option>
                                                                  <option>Sta-0011</option>
                                                                  <option>Sta-0012</option>
                                                                  <option>Sta-0013</option>
                                                                  <option>Sta-0015</option>
                                                                  <option>Sta-0016</option>
                                                                  <option>sta-0017</option>
                                                                  <option>sta-0019</option>
                                                                  <option>sta-0020</option>
                                                                  <option>Sta-0021</option>
                                                                  <option>sta-0022</option>
                                                                  <option>sta-0023</option>
                                                                  <option>sta-0024</option>
                                                                  <option>sta-0025</option>
                                                                  <option>Sta-0026</option>
                                                                  <option>Sta-0027</option>
                                                                  <option>Sta-0034</option>
                                                                  <option>sta-0036</option>
                                                                  <option>sta-0039</option>
                                                                  <option>sta-0040</option>
                                                                  <option>sta-0041</option>
                                                                  <option>Sta-0042</option>
                                                                  <option>sta-0043</option>
                                                                  <option>sta-0044</option>
                                                                  <option>Sta-0046</option>
                                                                  <option>Sta-0048</option>
                                                                  <option>Sta-0049</option>
                                                                  <option>Sta-0050</option>
                                                                  <option>Sta-0051</option>
                                                                  <option>Sta-0052</option>
                                                                  <option>Sta-0053</option>
                                                                  <option>sta-0054</option>
                                                                  <option>Sta-0055</option>
                                                                  <option>Sta-0057</option>
                                                                  <option>Sta-0058</option>
                                                                  <option>Sta-0059</option>
                                                                  <option>SUB-001</option>
                                                                  <option>SW-001</option>
                                                                  <option>SWB-001</option>
                                                                  <option>T-001</option>
                                                                  <option>T-002</option>
                                                                  <option>T-003</option>
                                                                  <option>Tab-001</option>
                                                                  <option>TB-001</option>
                                                                  <option>TB-002</option>
                                                                  <option>TL-001</option>
                                                                  <option>TM-001</option>
                                                                  <option>TM-002</option>
                                                                  <option>TM-003</option>
                                                                  <option>TM-004</option>
                                                                  <option>TP-001</option>
                                                                  <option>TP-002</option>
                                                                  <option>TP-003</option>
                                                                  <option>TP-004</option>
                                                                  <option>TP-005</option>
                                                                  <option>TP-006</option>
                                                                  <option>TP-007</option>
                                                                  <option>TP-008</option>
                                                                  <option>TP-009</option>
                                                                  <option>TP-010</option>
                                                                  <option>TP-011</option>
                                                                  <option>TP-012</option>
                                                                  <option>TP-013</option>
                                                                  <option>TP-014</option>
                                                                  <option>TP-015</option>
                                                                  <option>TP-016</option>
                                                                  <option>TP-017</option>
                                                                  <option>TP-018</option>
                                                                  <option>TP-019</option>
                                                                  <option>TP-020</option>
                                                                  <option>TP-021</option>
                                                                  <option>TP-022</option>
                                                                  <option>TP-023</option>
                                                                  <option>TP-024</option>
                                                                  <option>TP-025</option>
                                                                  <option>TP-026</option>
                                                                  <option>TP-027</option>
                                                                  <option>TP-028</option>
                                                                  <option>TP-029</option>
                                                                  <option>TR-001</option>
                                                                  <option>TR-002</option>
                                                                  <option>TR-003</option>
                                                                  <option>TR-004</option>
                                                                  <option>TR-005</option>
                                                                  <option>TR-006</option>
                                                                  <option>TR-007</option>
                                                                  <option>TR-008</option>
                                                                  <option>TR-009</option>
                                                                  <option>TR-010</option>
                                                                  <option>TR-011</option>
                                                                  <option>TRM - 0031</option>
                                                                  <option>TRM -0005</option>
                                                                  <option>TRM-0006</option>
                                                                  <option>TRM-0007</option>
                                                                  <option>TRM-0008</option>
                                                                  <option>TRM-0009</option>
                                                                  <option>TRM-0010</option>
                                                                  <option>TRM-00110</option>
                                                                  <option>TRM-0012</option>
                                                                  <option>TRM-0013</option>
                                                                  <option>TRM-0014</option>
                                                                  <option>TRM-0015</option>
                                                                  <option>TRM-0016</option>
                                                                  <option>TRM-0017</option>
                                                                  <option>TRM-0018</option>
                                                                  <option>TRM-0019</option>
                                                                  <option>TRM-0020</option>
                                                                  <option>TRM-0021</option>
                                                                  <option>TRM-0023</option>
                                                                  <option>TRM-0024</option>
                                                                  <option>TRM-0025</option>
                                                                  <option>TRM-0026</option>
                                                                  <option>TRM-0027</option>
                                                                  <option>TRM-0028</option>
                                                                  <option>TRM-0029</option>
                                                                  <option>TRM-0030</option>
                                                                  <option>TRM0013</option>
                                                                  <option>TRM0014</option>
                                                                  <option>TS-001</option>
                                                                  <option>TW-001</option>
                                                                  <option>TW-002</option>
                                                                  <option>TW-003</option>
                                                                  <option>TW-004</option>
                                                                  <option>TW-005</option>
                                                                  <option>TW-006</option>
                                                                  <option>TW-007</option>
                                                                  <option>TW-008</option>
                                                                  <option>TW-009</option>
                                                                  <option>TW-010</option>
                                                                  <option>TW-011</option>
                                                                  <option>TW-012</option>
                                                                  <option>TW-013</option>
                                                                  <option>TW-014</option>
                                                                  <option>TW-015</option>
                                                                  <option>TW-016</option>
                                                                  <option>TW-017</option>
                                                                  <option>TW-018</option>
                                                                  <option>TW-019</option>
                                                                  <option>TW-020</option>
                                                                  <option>TW-021</option>
                                                                  <option>TW-022</option>
                                                                  <option>TW-023</option>
                                                                  <option>TW-024</option>
                                                                  <option>TW-025</option>
                                                                  <option>TW-026</option>
                                                                  <option>TW-027</option>
                                                                  <option>TW-028</option>
                                                                  <option>TW-029</option>
                                                                  <option>TW-030</option>
                                                                  <option>TW-031</option>
                                                                  <option>TW-032</option>
                                                                  <option>TW-033</option>
                                                                  <option>TW-034</option>
                                                                  <option>TW-035</option>
                                                                  <option>TW-036</option>
                                                                  <option>TW-037</option>
                                                                  <option>TW-038</option>
                                                                  <option>UR-001</option>
                                                                  <option>UT-001</option>
                                                                  <option>UTI-001</option>
                                                                  <option>UTI-002</option>
                                                                  <option>UTI-003</option>
                                                                  <option>UTI-004</option>
                                                                  <option>UTI-005</option>
                                                                  <option>UTI-006</option>
                                                                  <option>UTI-007</option>
                                                                  <option>UTI-008</option>
                                                                  <option>V-0001</option>
                                                                  <option>Veh-001</option>
                                                                  <option>Veh-002</option>
                                                                  <option>Veh-003</option>
                                                                  <option>Veh-004</option>
                                                                  <option>WB-001</option>
                                                                  <option>WB-002</option>
                                                                  <option>WB-003</option>
                                                                  <option>WBS-001</option>
                                                                  <option>WF-001</option>
                                                                  <option>WP-001</option>
                                                                  <option>WP-002</option>
                                                                  <option>WP-003</option>
                                                                  <option>WP-004</option>
                                                                  <option>WS-001</option>
                                                                  <option>WXB-001</option>
                                                                  <option>XR-001</option>
                                                                  <option>Yoga - 001</option>
                                                                </datalist>
                                                               </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Description</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <input type="text" class="form-control" id="horizontal-firstname-input" placeholder="Product description here">
                                                             </div>
                                                          </div>
                                                           <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Category</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <select class="form-control select2 form-select">
                                                                  <option value="0">--Select-</option>
                                                                  <option value="1">4 Water Purifier 6 Fire Exti</option>
                                                                  <option value="2">AC (11)</option>
                                                                  <option value="3">Angel Chef Hot Kitchen</option>
                                                                  <option value="4">Anklet</option>
                                                                  <option value="5">Annual Anniversary</option>
                                                                  <option value="6">Annual Anniversary of PFDA - V</option>
                                                                  <option value="7">antivirus</option>
                                                                  <option value="8">antivirus</option>
                                                                  <option value="9">Art Finished Goods</option>
                                                                  <option value="10">Art Raw Materials</option>
                                                                </select>
                                                               </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                              <div class="col-4 d-flex align-items-center">
                                                                <h6>Reorder Quantity</h6>
                                                              </div>
                                                               <div class="col-8">
                                                                <input type="number" class="form-control" id="horizontal-firstname-input">
                                                               </div>
                                                            </div>
                                                      </div>
                                                      </div>
                                                   </div>
                                                 </div>
                                               </div>
                                               <div class="col-6">
                                                <div class="row">
                                                  <div class="col-12">
                                                     <div class="row mt-3">
                                                       <div class="col-md-12">
                                                           <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Name</h6>
                                                             </div>
                                                              <div class="col-8">
                                                                <input list="ItemDesc" name="ItemDesc" id="ItemDescId"
                                                                 class="form-control strip-tags input-border" 
                                                                 onchange="getItemInfo(this)" placeholder="Product name here" 
                                                                 required="" value="">
                                                                 <datalist id="ItemDesc" class="ItemDesc">
                                                                  <option>2 Color Block Dice</option>
                                                                  <option>3 Color Block Dice</option>
                                                                  <option>4 feet steel Scale</option>
                                                                  <option>A-4 Paper White</option>
                                                                  <option>Aararoth</option>
                                                                  <option>Aarong Dul Angta</option>
                                                                  <option>Aarong Dul Pin</option>
                                                                  <option>Aarong Tag</option>
                                                                  <option>Accessories</option>
                                                                  <option>Accessories</option>
                                                                  <option>Acromine color</option>
                                                                  <option>Acromion Color</option>
                                                                  <option>Acrylic Color</option>
                                                                  <option>Aika</option>
                                                                  <option>Air Freshness</option>
                                                                  <option>Air Soul</option>
                                                                  <option>Akromin Color Ash</option>
                                                                  <option>Akromin Color Black</option>
                                                                  <option>Akromin Color Blue</option>
                                                                  <option>Akromin Color Cream</option>
                                                                  <option>Akromin Color Firoza</option>
                                                                  <option>Akromin Color Golden</option>
                                                                  <option>Akromin Color Green</option>
                                                                  <option>Akromin Color Grey</option>
                                                                  <option>Akromin Color Khoiri</option>
                                                                  <option>Akromin Color Navy Blue</option>
                                                                  <option>Akromin Color Off White</option>
                                                                  <option>Akromin Color Orange</option>
                                                                  <option>Akromin Color Paste</option>
                                                                  <option>Akromin Color Red</option>
                                                                  <option>Akromin Color Sky Blue</option>
                                                                  <option>Akromin Color Violet</option>
                                                                  <option>Akromin Color White</option>
                                                                  <option>Akromin Color Yellow</option>
                                                                  <option>Akromin Pink Color Pink</option>
                                                                  <option>Alta</option>
                                                                  <option>Alu Bhaji</option>
                                                                  <option>Angel-fair tag</option>
                                                                  <option>Anklet</option>
                                                                  <option>Anklet - Black Red</option>
                                                                  <option>Anklet - Black, Blue &amp; Red</option>
                                                                  <option>Anklet - Blue Red</option>
                                                                  <option>Anklet - Blue White</option>
                                                                  <option>Anklet - Brown</option>
                                                                  <option>Anklet - Brown &amp; Black</option>
                                                                  <option>Anklet - Coffee Blue</option>
                                                                  <option>Anklet - Crystal Pink</option>
                                                                  <option>Anklet - Dark Blue &amp; Dark Green</option>
                                                                  <option>Anklet - Dark Blue &amp; Green</option>
                                                                  <option>Anklet - Dark Blue, Green &amp; Yellow</option>
                                                                  <option>Anklet - Dark Green</option>
                                                                  <option>Anklet - Dark Green &amp; Multicolor Wooden</option>
                                                                  <option>Anklet - Dark Green &amp; Yellow</option>
                                                                  <option>Anklet - Dark Green 2</option>
                                                                  <option>Anklet - Dark Green 3</option>
                                                                  <option>Anklet - Green &amp; Multicolor Wooden</option>
                                                                  <option>Anklet - Green &amp; Multicolor Wooden 2</option>
                                                                  <option>Anklet - Green &amp; Multicolor Wooden 3</option>
                                                                  <option>Anklet - Green &amp; Red</option>
                                                                  <option>Anklet - Orange</option>
                                                                  <option>Anklet - Orange &amp; Multicolor Wooden</option>
                                                                  <option>Anklet - Orange Pink</option>
                                                                  <option>Anklet - Orange White</option>
                                                                  <option>Anklet - Orange Wooden Green</option>
                                                                  <option>Anklet - Red &amp; Yellow</option>
                                                                  <option>Anklet - Red White</option>
                                                                  <option>Anklet - Red White 2</option>
                                                                  <option>Anklet - Red, Orange &amp; Yellow</option>
                                                                  <option>Anklet - Red, Yellow, White &amp; Black</option>
                                                                  <option>Anklet - White</option>
                                                                  <option>Anklet - Yellow &amp; Dark Blue</option>
                                                                  <option>Anklet - Yellow &amp; Green</option>
                                                                  <option>ANTIVIRUS</option>
                                                                  <option>Apriton Block's chemical</option>
                                                                  <option>Apron</option>
                                                                  <option>Art Paper</option>
                                                                  <option>Assessment bed</option>
                                                                  <option>Assessment Bed</option>
                                                                  <option>Astrey</option>
                                                                  <option>Asus Laptop</option>
                                                                  <option>Attendance Machine Repair</option>
                                                                  <option>Badami Brown Color Block Paint</option>
                                                                  <option>Badha Copi (Cabbage)</option>
                                                                  <option>Bager Hatol</option>
                                                                  <option>Bager Nailon Fita</option>
                                                                  <option>Bager Roshi</option>
                                                                  <option>Ball pen</option>
                                                                  <option>Balti(big)  for color work</option>
                                                                  <option>Banding folder</option>
                                                                  <option>Banner and Br ocher</option>
                                                                  <option>Barmis Juta</option>
                                                                  <option>Barmis slipper</option>
                                                                  <option>Bash</option>
                                                                  <option>Basher Catai</option>
                                                                  <option>Bashi</option>
                                                                  <option>Basin</option>
                                                                  <option>bd jobs bill</option>
                                                                  <option>Beads Anklet - Black &amp; White</option>
                                                                  <option>Beads Anklet - Black &amp; Yellow</option>
                                                                  <option>Beads Anklet - Black, Orange &amp; Green</option>
                                                                  <option>Beads Anklet - Black, Purple &amp; White</option>
                                                                  <option>Beads Anklet - Black, Read &amp; Yellow</option>
                                                                  <option>Beads Anklet - Black, White, Red &amp; Yellow (BWRY)</option>
                                                                  <option>Beads Anklet - Blue &amp; Green</option>
                                                                  <option>Beads Anklet - Blue, Orange &amp; Red</option>
                                                                  <option>Beads Anklet - Brown, Blue &amp; Pink</option>
                                                                  <option>Beads Anklet - Brown, Purple &amp; Sky Blue</option>
                                                                  <option>Beads Anklet - Brown, Red &amp; Golden</option>
                                                                  <option>Beads Anklet - Crystal Blue &amp; Wooden Green</option>
                                                                  <option>Beads Anklet - Crystal Pink, Dark Blue &amp; Wooden Brown</option>
                                                                  <option>Beads Anklet - Dark Blue &amp; Orange</option>
                                                                  <option>Beads Anklet - Dark Blue &amp; Red</option>
                                                                  <option>Beads Anklet - Dark Blue &amp; White</option>
                                                                  <option>Beads Anklet - Dark Blue, Green &amp; White</option>
                                                                  <option>Beads Anklet - Green, White &amp; Diamond</option>
                                                                  <option>Beads Anklet - Multicolor</option>
                                                                  <option>Beads Anklet - Multicolor (With Bells)</option>
                                                                  <option>Beads Anklet - Orange, Gold &amp; Red</option>
                                                                  <option>Beads Anklet - Orange, Red &amp; Gold</option>
                                                                  <option>Beads Anklet - Pink &amp; Green</option>
                                                                  <option>Beads Anklet - Pink, Orange &amp; Diamond Blue</option>
                                                                  <option>Beads Anklet - Purple, Orange &amp; White</option>
                                                                  <option>Beads Anklet - Purple, Silver &amp; Dark Blue</option>
                                                                  <option>Beads Anklet - Purple, White &amp; Dark Blue</option>
                                                                  <option>Beads Anklet - Red White</option>
                                                                  <option>Beads Anklet - Red, Crystal Blue &amp; Yellow</option>
                                                                  <option>Beads Anklet - White &amp; Purple</option>
                                                                  <option>Beads Anklet - White &amp; Red</option>
                                                                  <option>Beads Anklet - White, Dark Blue &amp; Wooden Purple</option>
                                                                  <option>Beads Anklet - White, Red &amp; Silver Shell</option>
                                                                  <option>Beads Anklet - Yellow</option>
                                                                  <option>Beads Anklet - Yellow &amp; Green</option>
                                                                  <option>Beads Anklet - Yellow &amp; Red</option>
                                                                  <option>Beads Anklet - Yellow, Green &amp; Red</option>
                                                                  <option>Beads Anklet - Yellow, Green &amp; Red 2</option>
                                                                  <option>Beads Anklet - Yellow, Pink &amp; Red</option>
                                                                  <option>Beads Anklet With Diamond - Blue &amp; Black</option>
                                                                  <option>Beads Anklet Wooden - Blue</option>
                                                                  <option>Beads Anklet Wooden - Green White</option>
                                                                  <option>Beads Anklet Wooden - Orange</option>
                                                                  <option>Beads Anklet Wooden - Sky Blue</option>
                                                                  <option>Beads Anklet Wooden - White</option>
                                                                  <option>Beauty Box</option>
                                                                  <option>Bed sheet</option>
                                                                  <option>Beef</option>
                                                                  <option>beer mug</option>
                                                                  <option>Bhalo Beads</option>
                                                                  <option>Big Block Dice</option>
                                                                  <option>Big Box</option>
                                                                  <option>Big Brush</option>
                                                                  <option>Big Brush FOR ART</option>
                                                                  <option>Big Needle</option>
                                                                  <option>Big Plastic Scale</option>
                                                                  <option>Big Spoon to mix colors</option>
                                                                  <option>Big Steel Scale</option>
                                                                  <option>Big Steel Scale</option>
                                                                  <option>Binder Block's chemical</option>
                                                                  <option>BLACK &amp; WOODEN BRACELET</option>
                                                                  <option>Black Beads</option>
                                                                  <option>Black Block Paint</option>
                                                                  <option>Black Mala</option>
                                                                  <option>Black Rope 0.25 cm thickness</option>
                                                                  <option>Blashan</option>
                                                                  <option>Blender Machine</option>
                                                                  <option>Block Bucket (Big)</option>
                                                                  <option>Block Bucket (small)</option>
                                                                  <option>Block Pencil</option>
                                                                  <option>Block Puzzle</option>
                                                                  <option>Block Stone Black</option>
                                                                  <option>Block Stone Blue</option>
                                                                  <option>Block Stone Chocolate Color</option>
                                                                  <option>Block Stone Golden</option>
                                                                  <option>Block Stone Green</option>
                                                                  <option>Block Stone Meroon</option>
                                                                  <option>Block Stone Pestal</option>
                                                                  <option>Block Stone Pink</option>
                                                                  <option>Block Stone Red</option>
                                                                  <option>Block Stone Silver</option>
                                                                  <option>Block Stone Sky Blue</option>
                                                                  <option>Block Stone Violet</option>
                                                                  <option>Block Stone White</option>
                                                                  <option>Block Stone Yellow</option>
                                                                  <option>Blower fan</option>
                                                                  <option>Blue Block Paint</option>
                                                                  <option>Blue Tooth Speaker</option>
                                                                  <option>BONDUK</option>
                                                                  <option>Borboti</option>
                                                                  <option>Boro Bati for mixing color</option>
                                                                  <option>Both side color paper</option>
                                                                  <option>Boutiques Dolar Blue</option>
                                                                  <option>Boutiques Dolar Chocolate Color</option>
                                                                  <option>Boutiques Dolar Frame Black</option>
                                                                  <option>Boutiques Dolar Frame Blue</option>
                                                                  <option>Boutiques Dolar Frame Chocolate Color</option>
                                                                  <option>Boutiques Dolar Frame Golden</option>
                                                                  <option>Boutiques Dolar Frame Green</option>
                                                                  <option>Boutiques Dolar Frame Meroon</option>
                                                                  <option>Boutiques Dolar Frame Paste Color</option>
                                                                  <option>Boutiques Dolar Frame Pink</option>
                                                                  <option>Boutiques Dolar Frame Red</option>
                                                                  <option>Boutiques Dolar Frame Silver</option>
                                                                  <option>Boutiques Dolar Frame Sky Blue</option>
                                                                  <option>Boutiques Dolar Frame Violet</option>
                                                                  <option>Boutiques Dolar Frame White</option>
                                                                  <option>Boutiques Dolar Frame Yellow</option>
                                                                  <option>Boutiques Dolar Golden</option>
                                                                  <option>Boutiques Dolar Green</option>
                                                                  <option>Boutiques Dolar Meroon</option>
                                                                  <option>Boutiques Dolar Pastel</option>
                                                                  <option>Boutiques Dolar Pink</option>
                                                                  <option>Boutiques Dolar Red</option>
                                                                  <option>Boutiques Dolar Silver</option>
                                                                  <option>Boutiques Dolar Sky Blue</option>
                                                                  <option>Boutiques Dolar Violet</option>
                                                                  <option>Boutiques Dolar White</option>
                                                                  <option>Boutiques Dolar Yellow</option>
                                                                  <option>Boutiques Dolar Yellow Black</option>
                                                                  <option>Box Board</option>
                                                                  <option>Boxes Board</option>
                                                                  <option>BRACELET</option>
                                                                  <option>Bread</option>
                                                                  <option>Brown Paper 300 gsm </option>
                                                                  <option>Brush set</option>
                                                                  <option>BUCKET OF TIN</option>
                                                                  <option>Bulldog clip</option>
                                                                  <option>Butter Bun</option>
                                                                  <option>Butter Fish</option>
                                                                  <option>Calculator</option>
                                                                  <option>Cannon Printer</option>
                                                                  <option>Canvas</option>
                                                                  <option>Canvas Paper</option>
                                                                  <option>Car tracking device</option>
                                                                  <option>Card Board </option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet</option>
                                                                  <option>Carpet sleeper thread</option>
                                                                  <option>Carrier Split AC 2.0 Ton</option>
                                                                  <option>Carrier window AC 1.5 Ton</option>
                                                                  <option>Carrier window AC 1.5 Ton</option>
                                                                  <option>Carrier window AC 1.5 Ton</option>
                                                                  <option>Carrier window AC 1.5 Ton</option>
                                                                  <option>Carrier window AC 1.5 Ton</option>
                                                                  <option>Cartise  paper</option>
                                                                  <option>Carton</option>
                                                                  <option>Cartoon</option>
                                                                  <option>Cat 6 Cable</option>
                                                                  <option>Cauliflower (Ful Kopi)</option>
                                                                  <option>Caustic Chemical</option>
                                                                  <option>CC TV Camera</option>
                                                                  <option>CC Tv Camera &amp; DBR Maintanace</option>
                                                                  <option>CCL Block's chemical</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCTV Camera (Donation)</option>
                                                                  <option>CCtV Deviar Machine</option>
                                                                  <option>Celing Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Celling Fan</option>
                                                                  <option>Cepta dami pathor</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Cane</option>
                                                                  <option>Chair Repair</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Rod-Iron</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Double</option>
                                                                  <option>Chair Sofa Single</option>
                                                                  <option>Chair Sofa Single</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Parents Seating</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Class Room.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chair-Plastice for Students Dinning.</option>
                                                                  <option>Chalk</option>
                                                                  <option>Chanachur</option>
                                                                  <option>Chepta Mala</option>
                                                                  <option>Chicken</option>
                                                                  <option>Chicken (Without Skin)</option>
                                                                  <option>Chicken Curry with Potato</option>
                                                                  <option>Chicken Curry without Potato</option>
                                                                  <option>Chini Gura Rice</option>
                                                                  <option>Chorka for beads jewelry</option>
                                                                  <option>Choshma / sun glass</option>
                                                                  <option>Choto Bati  for mixing color</option>
                                                                  <option>Choto Shuta  for binding cloths</option>
                                                                  <option>Cleaning materials</option>
                                                                  <option>cloth - Bexi voile </option>
                                                                  <option>cloth - Orbindu voile  </option>
                                                                  <option>Cloth Shoe Rack.</option>
                                                                  <option>Cng bill</option>
                                                                  <option>Color Block Tray</option>
                                                                  <option>Color Fitta</option>
                                                                  <option>Color Pallet</option>
                                                                  <option>color pallets</option>
                                                                  <option>Color poster paper</option>
                                                                  <option>Color tie die</option>
                                                                  <option>Colour (Aika mix)</option>
                                                                  <option>COLOUR FOR GLASS PAINTING</option>
                                                                  <option>Colour Television -21"</option>
                                                                  <option>Comb</option>
                                                                  <option>Complete carpet slipper Poly Pack</option>
                                                                  <option>Computer Working Table</option>
                                                                  <option>Computer Working Table</option>
                                                                  <option>Computer Working Table</option>
                                                                  <option>Computer Working Table</option>
                                                                  <option>Computer Working Table</option>
                                                                  <option>Computer Working Table</option>
                                                                  <option>Computer Working Table</option>
                                                                  <option>Conference Table</option>
                                                                  <option>conveyance</option>
                                                                  <option>Conveyance Bill</option>
                                                                  <option>Cooked Chhola</option>
                                                                  <option>Cooked Rice</option>
                                                                  <option>COOLING FAN</option>
                                                                  <option>Corka beads(Golden)</option>
                                                                  <option>Crest</option>
                                                                  <option>Crystal Blue Mala</option>
                                                                  <option>Crystal Green Mala</option>
                                                                  <option>Cucamber</option>
                                                                  <option>Culer fita</option>
                                                                  <option>Cup </option>
                                                                  <option>Cycling</option>
                                                                  <option>Cycling</option>
                                                                  <option>Cycling (Donation)</option>
                                                                  <option>DA-Co Gum</option>
                                                                  <option>Dal - Bute er Dal Dal</option>
                                                                  <option>Dal - Chola</option>
                                                                  <option>Dal - Keshari </option>
                                                                  <option>Dal - Maskali Dal</option>
                                                                  <option>Dal - Mosur Dal</option>
                                                                  <option>Dal - Mug dal </option>
                                                                  <option>Dal - Raw Dal (Pals)</option>
                                                                  <option>Dal- Mug dal</option>
                                                                  <option>Dami Lace for napkin</option>
                                                                  <option>Dami Tassel</option>
                                                                  <option>Darchini</option>
                                                                  <option>Dari</option>
                                                                  <option>Daruchini</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer</option>
                                                                  <option>Desktop Computer Walton</option>
                                                                  <option>Desktop Computer Walton</option>
                                                                  <option>DESKTOP POWER CABLE</option>
                                                                  <option>Dhaka Metro-Cha 19-2606</option>
                                                                  <option>Dhaka Metro-Cha 56-3032</option>
                                                                  <option>DHOL</option>
                                                                  <option>Dhol Beads</option>
                                                                  <option>Dhol Moti</option>
                                                                  <option>Dhol Plastic (Golden)</option>
                                                                  <option>Dholl</option>
                                                                  <option>Dhoniya Gura</option>
                                                                  <option>Different Color Mukta Drep</option>
                                                                  <option>Different Color Mukta Mala</option>
                                                                  <option>Dining Chair</option>
                                                                  <option>Dinning Table</option>
                                                                  <option>Dish/Cable Connection</option>
                                                                  <option>DOHS service bill</option>
                                                                  <option>Dolar items </option>
                                                                  <option>Dolphin Hook</option>
                                                                  <option>Doniya Gora</option>
                                                                  <option>Dry Cake</option>
                                                                  <option>Dry Chilli</option>
                                                                  <option>Egg</option>
                                                                  <option>Egg Fry</option>
                                                                  <option>EKTARA</option>
                                                                  <option>Elach</option>
                                                                  <option>Elachi</option>
                                                                  <option>Electricity Bills</option>
                                                                  <option>Embroidery For Napkin</option>
                                                                  <option>Endorsing INK Black</option>
                                                                  <option>Endorsing INK Purple</option>
                                                                  <option>Endorsing INK Red</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Executive Chair</option>
                                                                  <option>Eye Lash</option>
                                                                  <option>Eye shadow</option>
                                                                  <option>F53 Block's chemical</option>
                                                                  <option>Fabric color</option>
                                                                  <option>Fabrics Mask</option>
                                                                  <option>Facial Tissue</option>
                                                                  <option>Fedooker dat</option>
                                                                  <option>FEVICOL</option>
                                                                  <option>Fevicol Glue</option>
                                                                  <option>Fine Gum Block's chemical</option>
                                                                  <option>Fish - Butter Fish</option>
                                                                  <option>Fish - Jew Fish</option>
                                                                  <option>Fish - Mackeral Fish</option>
                                                                  <option>Fish - Pangash Fish</option>
                                                                  <option>Fish - Rui Fish</option>
                                                                  <option>Fish - Tangra Fish</option>
                                                                  <option>Fish - Yellow Queen Fish</option>
                                                                  <option>Fish -Katol Fish</option>
                                                                  <option>Fish -Soul fish</option>
                                                                  <option>Fish -Talapiya Fish</option>
                                                                  <option>Fish Curry (Pungus)</option>
                                                                  <option>Fish Curry (Rui)</option>
                                                                  <option>Fish Curry (Talapia)</option>
                                                                  <option>Fittness Masenger Vibration</option>
                                                                  <option>Flour</option>
                                                                  <option>Flower vase ( medium  range)</option>
                                                                  <option>Flower vase (Large range)</option>
                                                                  <option>Flower vase (small range)</option>
                                                                  <option>Food</option>
                                                                  <option>Food Bill</option>
                                                                  <option>Food ingredients and cost -canteen</option>
                                                                  <option>Foundation</option>
                                                                  <option>Fountain</option>
                                                                  <option>Frame for stich </option>
                                                                  <option>Frame screen print</option>
                                                                  <option>Fridges Deep.</option>
                                                                  <option>Fridges Normal</option>
                                                                  <option>Fruit</option>
                                                                  <option>Fruit - Apple</option>
                                                                  <option>Fruit - Banana</option>
                                                                  <option>Fruit -Guava</option>
                                                                  <option>Fruit -Jambura</option>
                                                                  <option>Fruit -Pineapple</option>
                                                                  <option>Fruits-Orange</option>
                                                                  <option>GACHIR JHURI</option>
                                                                  <option>Gajor (Carrot)</option>
                                                                  <option>Garbage Poly</option>
                                                                  <option>Garlic</option>
                                                                  <option>Garments Cloth Pink</option>
                                                                  <option>Garmes Napkin Cloth</option>
                                                                  <option>Gas Bill</option>
                                                                  <option>gas burner</option>
                                                                  <option>Gasgachali</option>
                                                                  <option>Ghash</option>
                                                                  <option>GHONTA (SMALL) - Bell</option>
                                                                  <option>Ginger</option>
                                                                  <option>Glass Beads Blue</option>
                                                                  <option>Glass Beads Green</option>
                                                                  <option>Glass Beads Red</option>
                                                                  <option>glass paint</option>
                                                                  <option>Glitter - Black Glitters</option>
                                                                  <option>Glitter - Blue Glitters</option>
                                                                  <option>Glitter - Chocolate Color Glitters</option>
                                                                  <option>Glitter - Golden Glitters</option>
                                                                  <option>Glitter - Green Glitters</option>
                                                                  <option>Glitter - Meroon Glitters</option>
                                                                  <option>Glitter - Pastal Glitters</option>
                                                                  <option>Glitter - Pink Glitters</option>
                                                                  <option>Glitter - Red Glitters</option>
                                                                  <option>Glitter - Silver Glitters</option>
                                                                  <option>Glitter - Sky Blue Glitters</option>
                                                                  <option>Glitter - Violet Glitters</option>
                                                                  <option>Glitter - White Glitters</option>
                                                                  <option>Glitter - Yellow Glitters</option>
                                                                  <option>Gloves</option>
                                                                  <option>Glue gun</option>
                                                                  <option>Glue stick</option>
                                                                  <option>Glue stick</option>
                                                                  <option>Goj kapor</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Black</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Blue</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Chocolate Color</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Golden</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Green</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Meroon</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Paste Color</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Pink</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Red</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Silver</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Sky Blue</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Violet</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width White</option>
                                                                  <option>Goj Kapor - Bexi Vowel 2.5 Width Yellow</option>
                                                                  <option>Goj Kapor - Bexi Voyel  Red fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Black  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Blue  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Chocolate Color  fabrics  </option>
                                                                  <option>Goj Kapor - Bexi Voyel Golden  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Green  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Meroon  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Paste Color  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Pink  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Silver  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Sky Blue  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Violet  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel White  fabrics </option>
                                                                  <option>Goj Kapor - Bexi Voyel Yellow  fabrics </option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Black</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Blue</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Chocolate Color</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Golden</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Green</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Meroon</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Paste Color</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Pink</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Red</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Silver</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Sky Blue</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Violet</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width White</option>
                                                                  <option>Goj Kapor - Madina Kapor 2.5 Width Yellow</option>
                                                                  <option>Goj Kapor - Madina Kapor Black 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Chocolate Color 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Golden 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Green 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Meroon 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Paste Color 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Pink 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Red 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Silver 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Sky Blue 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor Violet 2 Width</option>
                                                                  <option>Goj Kapor - Madina Kapor White 2 Width</option>
                                                                  <option>Goj Kapor -Madina Kapor Blue 2 Width</option>
                                                                  <option>Goj Kapor -Madina Kapor Yellow 2 Width</option>
                                                                  <option>Goj Kapor 36 (2 Width) Black</option>
                                                                  <option>Goj Kapor 36 (2 Width) Blue</option>
                                                                  <option>Goj Kapor 36 (2 Width) Chocolate Color</option>
                                                                  <option>Goj Kapor 36 (2 Width) Golden</option>
                                                                  <option>Goj Kapor 36 (2 Width) Green</option>
                                                                  <option>Goj Kapor 36 (2 Width) Meroon</option>
                                                                  <option>Goj Kapor 36 (2 Width) Paste Color</option>
                                                                  <option>Goj Kapor 36 (2 Width) Pink</option>
                                                                  <option>Goj Kapor 36 (2 Width) Red</option>
                                                                  <option>Goj Kapor 36 (2 Width) Silver</option>
                                                                  <option>Goj Kapor 36 (2 Width) Sky Blue</option>
                                                                  <option>Goj Kapor 36 (2 Width) Violet</option>
                                                                  <option>Goj Kapor 36 (2 Width) White</option>
                                                                  <option>Goj Kapor 36 (2 Width) Yellow</option>
                                                                  <option>Goj Kapor 36 (2.5 Width)  Meroon</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Black</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Blue</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Chocolate Color</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Golden</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Green</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Paste Color</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Pink</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Red</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Silver</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Sky Blue</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Violet</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) White</option>
                                                                  <option>Goj Kapor 36 (2.5 Width) Yellow</option>
                                                                  <option>Gol Moric</option>
                                                                  <option>Golden Block Paint</option>
                                                                  <option>Golden Chicken</option>
                                                                  <option>GOLDEN SPRAY</option>
                                                                  <option>Gourd</option>
                                                                  <option>GPRS bill</option>
                                                                  <option>GRASS</option>
                                                                  <option>Gray Colour Cloth Marking</option>
                                                                  <option>Green Block Paint</option>
                                                                  <option>Green cilli</option>
                                                                  <option>Ground Red Chilli</option>
                                                                  <option>Guitar Accuitic 3rd AVE</option>
                                                                  <option>GUNA</option>
                                                                  <option>GUNA</option>
                                                                  <option>Gymsim</option>
                                                                  <option>Hair Band</option>
                                                                  <option>Hair Clip</option>
                                                                  <option>HAIR PIN</option>
                                                                  <option>Hair Ribbon</option>
                                                                  <option>Hair spray</option>
                                                                  <option>Hair spray</option>
                                                                  <option>Haire Split AC 2.0 Ton</option>
                                                                  <option>Hand Held Masenger</option>
                                                                  <option>Hand Sanitizer</option>
                                                                  <option>Hand Wash</option>
                                                                  <option>Hard Disc 2 TB</option>
                                                                  <option>Hard Disk</option>
                                                                  <option>Hard Disk (U/S)</option>
                                                                  <option>Harmonium</option>
                                                                  <option>Harpic</option>
                                                                  <option>Harpic toilet cleaner</option>
                                                                  <option>Hasuli (Big)</option>
                                                                  <option>hat pakha</option>
                                                                  <option>HD Perona logo</option>
                                                                  <option>HD-TVI Camera</option>
                                                                  <option>Highlighter</option>
                                                                  <option>Hot spice Mosla</option>
                                                                  <option>House Rent</option>
                                                                  <option>Huawei Media Pad T310</option>
                                                                  <option>hurricane</option>
                                                                  <option>Hydrox Chemical</option>
                                                                  <option>Ilish Fish</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set</option>
                                                                  <option>Intercome Telephone Set (Master set)</option>
                                                                  <option>Internet Bills</option>
                                                                  <option>INTERNET SWITCH BOARD</option>
                                                                  <option>IPS Battery</option>
                                                                  <option>IRR ( Infa Red Radiation)</option>
                                                                  <option>James Clips</option>
                                                                  <option>Jhuri Puti (Culser)- Black</option>
                                                                  <option>Jhuri Puti (Culser)- Blue</option>
                                                                  <option>Jhuri Puti (Culser)- Coffee</option>
                                                                  <option>Jhuri Puti (Culser)- Glass Pink</option>
                                                                  <option>Jhuri Puti (Culser)- Green</option>
                                                                  <option>Jhuri Puti (Culser)- Light Green</option>
                                                                  <option>Jhuri Puti (Culser)- Orange</option>
                                                                  <option>Jhuri Puti (Culser)- Pink</option>
                                                                  <option>Jhuri Puti (Culser)- Purple</option>
                                                                  <option>Jhuri Puti (Culser)- Red</option>
                                                                  <option>Jhuri Puti (Culser)- Sky Blue</option>
                                                                  <option>Jhuri Puti (Culser)- White</option>
                                                                  <option>Jhuri Puti (Culser)- Yellow</option>
                                                                  <option>Jhut kapor</option>
                                                                  <option>Jink Powder</option>
                                                                  <option>Joypuri Pathor</option>
                                                                  <option>Jug</option>
                                                                  <option>Juki Sewing Machine</option>
                                                                  <option>Juki Sewing Machine</option>
                                                                  <option>Jute for Training</option>
                                                                  <option>Kahon</option>
                                                                  <option>Kajol</option>
                                                                  <option>Kalo clip</option>
                                                                  <option>Kamranga Cap</option>
                                                                  <option>KANCHA FOOL</option>
                                                                  <option>KANCHA FOOL er MALA</option>
                                                                  <option>Kerosene</option>
                                                                  <option>KeSharee  Dal</option>
                                                                  <option>Key Board YAMAHA-PSR( Model-S-770-61 Ks)</option>
                                                                  <option>KEYBOARD</option>
                                                                  <option>keyboard case</option>
                                                                  <option>Keyboard Manual</option>
                                                                  <option>Keyboard PSR-5770 YAMAHA</option>
                                                                  <option>Keyboard Stand</option>
                                                                  <option>Khoiri Brown Color Block Paint</option>
                                                                  <option>Khonjoni</option>
                                                                  <option>KHONJONI</option>
                                                                  <option>Khopar  kata</option>
                                                                  <option>Khor</option>
                                                                  <option>Kitchen cleaning materials - canteen</option>
                                                                  <option>Kitchen knife</option>
                                                                  <option>Kitchen Steel Table</option>
                                                                  <option>Kitchen Tissue</option>
                                                                  <option>Koi Fish</option>
                                                                  <option>Komdami Lace for napkin</option>
                                                                  <option>Korai big</option>
                                                                  <option>Korat</option>
                                                                  <option>KORK SHEET</option>
                                                                  <option>Korola </option>
                                                                  <option>Kurtis paper</option>
                                                                  <option>Kushikatar lace </option>
                                                                  <option>Lace</option>
                                                                  <option>Lace </option>
                                                                  <option>Ladder</option>
                                                                  <option>Ladis Finger</option>
                                                                  <option>Laptop </option>
                                                                  <option>Laptop </option>
                                                                  <option>Laptop </option>
                                                                  <option>Laptop </option>
                                                                  <option>Lash Glue</option>
                                                                  <option>LED LIGHT</option>
                                                                  <option>LED Television -Transtec 40"</option>
                                                                  <option>LED Television -Transtec 42"</option>
                                                                  <option>Lemon</option>
                                                                  <option>Lincit Oil</option>
                                                                  <option>LIPLINER</option>
                                                                  <option>Lipstick</option>
                                                                  <option>Lipstick</option>
                                                                  <option>Liquid Milk</option>
                                                                  <option>Locket - Antique Locket</option>
                                                                  <option>Lomba Beads B</option>
                                                                  <option>Lomba Beads S</option>
                                                                  <option>Lomba Block Dice</option>
                                                                  <option>Long</option>
                                                                  <option>Long Necklace - Crystal Blue, Diamond Red &amp; Diamond Green</option>
                                                                  <option>Long Necklace - Wooden &amp; Multicolor</option>
                                                                  <option>Loose powder</option>
                                                                  <option>Lumber roll</option>
                                                                  <option>Lungi</option>
                                                                  <option>Lyrics Stand</option>
                                                                  <option>Machine bobbin</option>
                                                                  <option>Machine bobbin wash</option>
                                                                  <option>Machine hook</option>
                                                                  <option>Machine Needle - 20</option>
                                                                  <option>Machine Needle-14</option>
                                                                  <option>Machine oil</option>
                                                                  <option>Mackeral Fish</option>
                                                                  <option>Magazine Boxes</option>
                                                                  <option>Majhari Bati  for mixing color</option>
                                                                  <option>Majhari Tuli</option>
                                                                  <option>Makeup Brush</option>
                                                                  <option>MAKEUP BRUSH SET</option>
                                                                  <option>Makeup puff</option>
                                                                  <option>Making charge</option>
                                                                  <option>Malta Fruits</option>
                                                                  <option>Mango pickle</option>
                                                                  <option>MARIGOLD FLOWER</option>
                                                                  <option>Marking cloth</option>
                                                                  <option>Mask</option>
                                                                  <option>Maskara</option>
                                                                  <option>Measurement tape - Fitha</option>
                                                                  <option>Medicine Trolly</option>
                                                                  <option>Medium Block Dice</option>
                                                                  <option>Medium Box</option>
                                                                  <option>Medium Brush</option>
                                                                  <option>Medium Spoon to mix colors</option>
                                                                  <option>Metal Beads (Dami)</option>
                                                                  <option>Metal Beads (Golden Gel)</option>
                                                                  <option>Metal Chain(Golden)</option>
                                                                  <option>Metal Chain(Silver)</option>
                                                                  <option>Metal dhol beads</option>
                                                                  <option>Metal Full Cap</option>
                                                                  <option>Metal Full Cap (Golden)</option>
                                                                  <option>Metal kori big</option>
                                                                  <option>Metal Locket</option>
                                                                  <option>Metal shamuk</option>
                                                                  <option>Micro Oven </option>
                                                                  <option>Microphone</option>
                                                                  <option>Microphone</option>
                                                                  <option>Milk Powder</option>
                                                                  <option>Milk Vita</option>
                                                                  <option>Mineral water</option>
                                                                  <option>Mirror</option>
                                                                  <option>Mixed Salad</option>
                                                                  <option>Mixed Veggie for Breakfast</option>
                                                                  <option>Mixed Veggie for Lunch</option>
                                                                  <option>Mob with basket</option>
                                                                  <option>Mobile Bills</option>
                                                                  <option>Mobile Phone Set</option>
                                                                  <option>Mobile Phone Set</option>
                                                                  <option>MONDIRA</option>
                                                                  <option>Mono Poly Games</option>
                                                                  <option>Moori / Puffed Rice</option>
                                                                  <option>Mota Shuta for binding cloths</option>
                                                                  <option>MOUSE</option>
                                                                  <option>Mug dual</option>
                                                                  <option>Mukta / Pearl</option>
                                                                  <option>Mukta Red</option>
                                                                  <option>Multiplug</option>
                                                                  <option>muph suta</option>
                                                                  <option>Mustard Oil</option>
                                                                  <option>Napkin Tissue</option>
                                                                  <option>Needle</option>
                                                                  <option>Net</option>
                                                                  <option>Neutreus Paste Block's chemical</option>
                                                                  <option>NK Fixture Block's chemical</option>
                                                                  <option>no mixer</option>
                                                                  <option>Noodles</option>
                                                                  <option>Noodles (coca cola)</option>
                                                                  <option>Normal Dolphin accessory   </option>
                                                                  <option>NT Cutter</option>
                                                                  <option>NT Cutter Blade</option>
                                                                  <option>Office File</option>
                                                                  <option>Office repair and maintenance</option>
                                                                  <option>Office stationaries - paper work</option>
                                                                  <option>Official Table</option>
                                                                  <option>Official Table</option>
                                                                  <option>Official Table</option>
                                                                  <option>Official Table</option>
                                                                  <option>Official Table</option>
                                                                  <option>Oil - Mustard Oil</option>
                                                                  <option>oil color</option>
                                                                  <option>Oil Color (à¦¤à¦² à¦°à¦‚)</option>
                                                                  <option>Onion</option>
                                                                  <option>Online boost up</option>
                                                                  <option>Orange Block Paint</option>
                                                                  <option>Over Lock Machine</option>
                                                                  <option>Oxley Block's chemical</option>
                                                                  <option>Pabda fish</option>
                                                                  <option>Pach-Foron</option>
                                                                  <option>Packing Poly 5kg size</option>
                                                                  <option>Padel Bi-Cycle</option>
                                                                  <option>Pancake</option>
                                                                  <option>Paneer bata</option>
                                                                  <option>Pangash Fish</option>
                                                                  <option>Papay</option>
                                                                  <option>Paper bag snacks (L)</option>
                                                                  <option>Paper bag snacks (M)</option>
                                                                  <option>Paper Cutter</option>
                                                                  <option>Paposh / Door mat</option>
                                                                  <option>Parata</option>
                                                                  <option>Parlor Clip</option>
                                                                  <option>Pas Puran</option>
                                                                  <option>Pat khori</option>
                                                                  <option>Patch Hook</option>
                                                                  <option>Pater Beni</option>
                                                                  <option>Pater Chot</option>
                                                                  <option>Patil (big) for color work</option>
                                                                  <option>Pedestal Fan (Donation)</option>
                                                                  <option>Pen drive</option>
                                                                  <option>Pen drive</option>
                                                                  <option>Pencil</option>
                                                                  <option>Pencil Color</option>
                                                                  <option>Pepe Vegetable</option>
                                                                  <option>Pesting</option>
                                                                  <option>Pettar Shuta</option>
                                                                  <option>Photo Binding</option>
                                                                  <option>Photo copy Repair</option>
                                                                  <option>Photocopy Machine Cannon 2002N</option>
                                                                  <option>Photocopy Toner</option>
                                                                  <option>Physio ball - Big</option>
                                                                  <option>Piece of Combol</option>
                                                                  <option>Piece of Foam</option>
                                                                  <option>Pilot Hi-Tecpoint</option>
                                                                  <option>Pin  Remober</option>
                                                                  <option>Pin Holder  Ikebana</option>
                                                                  <option>Pinter Epson</option>
                                                                  <option>Plain  toast</option>
                                                                  <option>Plain cake</option>
                                                                  <option>Plastic file</option>
                                                                  <option>Plastic Imalshan </option>
                                                                  <option>PLASTIC LEAVE</option>
                                                                  <option>PLASTIC POT</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>Plastice Table For Students Dinning</option>
                                                                  <option>plein fit</option>
                                                                  <option>Poly Propailin Fabrics</option>
                                                                  <option>Polythene bag </option>
                                                                  <option>Poster Paper Blue</option>
                                                                  <option>Poster Paper Brown</option>
                                                                  <option>Poster Paper Green</option>
                                                                  <option>Poster Paper Pink</option>
                                                                  <option>Poster Paper Red</option>
                                                                  <option>Poster Paper Yellow</option>
                                                                  <option>Potal </option>
                                                                  <option>Potato</option>
                                                                  <option>Power Cable</option>
                                                                  <option>Pressure Cooker</option>
                                                                  <option>Printer </option>
                                                                  <option>Projector </option>
                                                                  <option>PROJECTOR Machine</option>
                                                                  <option>Projector screen</option>
                                                                  <option>Prussian Paint Black</option>
                                                                  <option>Prussian Paint Blue</option>
                                                                  <option>Prussian Paint Green</option>
                                                                  <option>Prussian Paint Orange</option>
                                                                  <option>Prussian Paint Red</option>
                                                                  <option>Prussian Paint Sky Blue</option>
                                                                  <option>Prussian Paint White</option>
                                                                  <option>Prussian Paint Yellow</option>
                                                                  <option>Puff</option>
                                                                  <option>Pully</option>
                                                                  <option>Pully Over head</option>
                                                                  <option>Pumper</option>
                                                                  <option>Pumpkin</option>
                                                                  <option>Punch File Plastic</option>
                                                                  <option>Punch Machine (Large)</option>
                                                                  <option>Purple Block Paint</option>
                                                                  <option>Puthi Black</option>
                                                                  <option>Puthi Blue</option>
                                                                  <option>Puthi Chocolate Color</option>
                                                                  <option>Puthi Golden</option>
                                                                  <option>Puthi Green</option>
                                                                  <option>Puthi Meroon</option>
                                                                  <option>Puthi Paste Color</option>
                                                                  <option>Puthi Pink</option>
                                                                  <option>Puthi Red</option>
                                                                  <option>Puthi Silver</option>
                                                                  <option>Puthi Sky Blue</option>
                                                                  <option>Puthi Violet</option>
                                                                  <option>Puthi White</option>
                                                                  <option>Puthi Yellow</option>
                                                                  <option>PVC Board</option>
                                                                  <option>PVC PIPE</option>
                                                                  <option>PVC ROLL</option>
                                                                  <option>Rapping paper</option>
                                                                  <option>Real Blue Mukta</option>
                                                                  <option>Real dami pathor</option>
                                                                  <option>Real pathor</option>
                                                                  <option>Reception Table</option>
                                                                  <option>Red &amp; Black Mukta Mala</option>
                                                                  <option>Red Block Paint</option>
                                                                  <option>Red Chilli</option>
                                                                  <option>Red Mala</option>
                                                                  <option>Revolving Chair</option>
                                                                  <option>Revolving Chair</option>
                                                                  <option>RFL Dining Chair</option>
                                                                  <option>RFL Dining Table</option>
                                                                  <option>Ribbon</option>
                                                                  <option>Ribbon or Fita</option>
                                                                  <option>Rice - Chaler Gura</option>
                                                                  <option>Rice - Chini Gura Rice</option>
                                                                  <option>Rice Chal</option>
                                                                  <option>Rock Shuta</option>
                                                                  <option>Rong</option>
                                                                  <option>Rongin Paper</option>
                                                                  <option>Roti Maker Steel</option>
                                                                  <option>ROUTER</option>
                                                                  <option>RUBBER BANGLES</option>
                                                                  <option>Rubber Shuta</option>
                                                                  <option>Rubber sole</option>
                                                                  <option>Rubber stamp seal</option>
                                                                  <option>Rudrakhs puti (Big)</option>
                                                                  <option>Rudrakhs puti (Mid)</option>
                                                                  <option>Rudrakhs puti (Small)</option>
                                                                  <option>Rui Fish</option>
                                                                  <option>Ruti Bread</option>
                                                                  <option>SAFETY PIN-BIG</option>
                                                                  <option>Salt</option>
                                                                  <option>Sandwich</option>
                                                                  <option>SANKI</option>
                                                                  <option>Saslik Katthi</option>
                                                                  <option>Sauce  Bottel</option>
                                                                  <option>Saucepan small</option>
                                                                  <option>Savlon</option>
                                                                  <option>Savlon</option>
                                                                  <option>Scarf  Paste Color</option>
                                                                  <option>Scarf Black</option>
                                                                  <option>Scarf Blue</option>
                                                                  <option>Scarf Chocolate Color</option>
                                                                  <option>Scarf Golden</option>
                                                                  <option>Scarf Green</option>
                                                                  <option>Scarf Meroon</option>
                                                                  <option>Scarf Pink</option>
                                                                  <option>Scarf Red</option>
                                                                  <option>Scarf Silver</option>
                                                                  <option>Scarf Sky Blue</option>
                                                                  <option>Scarf Violet</option>
                                                                  <option>Scarf White</option>
                                                                  <option>Scarf Yellow</option>
                                                                  <option>Scissor</option>
                                                                  <option>Scissors big</option>
                                                                  <option>Scotch tape (</option>
                                                                  <option>scotch tape ( small)</option>
                                                                  <option>scotch tape ( small)</option>
                                                                  <option>Scotch tape (large)</option>
                                                                  <option>scotch tape (medium )</option>
                                                                  <option>Screen Print Brush</option>
                                                                  <option>Screen Print Color</option>
                                                                  <option>Screen Print Frame</option>
                                                                  <option>Seem (Bean)</option>
                                                                  <option>Sensory Board</option>
                                                                  <option>Sensory Board</option>
                                                                  <option>Sensory body Massager</option>
                                                                  <option>Sesinga Vegetable</option>
                                                                  <option>set Up BanchEt-102-4</option>
                                                                  <option>Sewing</option>
                                                                  <option>Sewing carpet sleeper pair</option>
                                                                  <option>Sewing Charge</option>
                                                                  <option>SEWING MACHINE LIGHT</option>
                                                                  <option>Sewing Napkin</option>
                                                                  <option>Shak fry</option>
                                                                  <option>Shakh Vegetable</option>
                                                                  <option>Sharee - Shuti Sharee  Black</option>
                                                                  <option>Sharee - Shuti Sharee  Blue</option>
                                                                  <option>Sharee - Shuti Sharee  Chocolate Color</option>
                                                                  <option>Sharee - Shuti Sharee  Golden</option>
                                                                  <option>Sharee - Shuti Sharee  Green</option>
                                                                  <option>Sharee - Shuti Sharee  Meroon</option>
                                                                  <option>Sharee - Shuti Sharee  Paste Color</option>
                                                                  <option>Sharee - Shuti Sharee  Pink</option>
                                                                  <option>Sharee - Shuti Sharee  Red</option>
                                                                  <option>Sharee - Shuti Sharee  Silver</option>
                                                                  <option>Sharee - Shuti Sharee  Sky Blue</option>
                                                                  <option>Sharee - Shuti Sharee  Violet</option>
                                                                  <option>Sharee - Shuti Sharee  White</option>
                                                                  <option>Sharee - Shuti Sharee  Yellow</option>
                                                                  <option>Sharee Black</option>
                                                                  <option>Sharee Blue</option>
                                                                  <option>Sharee Chocolate Color</option>
                                                                  <option>Sharee Golden</option>
                                                                  <option>Sharee Green</option>
                                                                  <option>Sharee Paste Color</option>
                                                                  <option>Sharee Pink</option>
                                                                  <option>Sharee Red</option>
                                                                  <option>Sharee Silver</option>
                                                                  <option>Sharee Sky Blue</option>
                                                                  <option>Sharee Violet</option>
                                                                  <option>Sharee White</option>
                                                                  <option>Sharee Yellow</option>
                                                                  <option>Shari</option>
                                                                  <option>Shelves </option>
                                                                  <option>Shelves</option>
                                                                  <option>Shelves</option>
                                                                  <option>Shelves</option>
                                                                  <option>Shelves</option>
                                                                  <option>Shelves</option>
                                                                  <option>Shelves (Donation)</option>
                                                                  <option>Shelves (Donation)</option>
                                                                  <option>Shelves for Display Items</option>
                                                                  <option>Shelves for Student</option>
                                                                  <option>Shelves for Student</option>
                                                                  <option>Shemai </option>
                                                                  <option>Shemai (Pakistani)</option>
                                                                  <option>Shemai Milk sweet</option>
                                                                  <option>Shidoor Red Mala</option>
                                                                  <option>Shora</option>
                                                                  <option>Shora Design</option>
                                                                  <option>Short wave diathermy</option>
                                                                  <option>Short wave diathermy (SWD)</option>
                                                                  <option>Shutha (2 Shades)  Yellow</option>
                                                                  <option>Shutha (2 Shades) Black</option>
                                                                  <option>Shutha (2 Shades) Blue</option>
                                                                  <option>Shutha (2 Shades) Chocolate Color</option>
                                                                  <option>Shutha (2 Shades) Golden</option>
                                                                  <option>Shutha (2 Shades) Green</option>
                                                                  <option>Shutha (2 Shades) Meroon</option>
                                                                  <option>Shutha (2 Shades) Paste Color</option>
                                                                  <option>Shutha (2 Shades) Pink</option>
                                                                  <option>Shutha (2 Shades) Red</option>
                                                                  <option>Shutha (2 Shades) Silver</option>
                                                                  <option>Shutha (2 Shades) Sky Blue</option>
                                                                  <option>Shutha (2 Shades) Violet</option>
                                                                  <option>Shutha (2 Shades) White</option>
                                                                  <option>Shutha (3 Shades) Black</option>
                                                                  <option>Shutha (3 Shades) Blue</option>
                                                                  <option>Shutha (3 Shades) Chocolate Color</option>
                                                                  <option>Shutha (3 Shades) Golden</option>
                                                                  <option>Shutha (3 Shades) Green</option>
                                                                  <option>Shutha (3 Shades) Meroon</option>
                                                                  <option>Shutha (3 Shades) Paste Color</option>
                                                                  <option>Shutha (3 Shades) Pink</option>
                                                                  <option>Shutha (3 Shades) Red</option>
                                                                  <option>Shutha (3 Shades) Silver</option>
                                                                  <option>Shutha (3 Shades) Sky Blue</option>
                                                                  <option>Shutha (3 Shades) Violet</option>
                                                                  <option>Shutha (3 Shades) White</option>
                                                                  <option>Shutha (3 Shades) Yellow</option>
                                                                  <option>Side Table</option>
                                                                  <option>Side Table</option>
                                                                  <option>Sign Pen Black</option>
                                                                  <option>Sign Pen Green</option>
                                                                  <option>Sign pen Red</option>
                                                                  <option>Silk cloth</option>
                                                                  <option>Silver Ball</option>
                                                                  <option>Silver Block Paint</option>
                                                                  <option>Silver Fish</option>
                                                                  <option>SILVER PITCHER</option>
                                                                  <option>SILVER POT</option>
                                                                  <option>Singer sewing Machine</option>
                                                                  <option>Singer sewing Machine</option>
                                                                  <option>Singer sewing Machine</option>
                                                                  <option>Singer sewing Machine</option>
                                                                  <option>Singer sewing Machine</option>
                                                                  <option>SKOCHTEP</option>
                                                                  <option>Sleeper Soul</option>
                                                                  <option>SMALL BAMBOO BUCKET</option>
                                                                  <option>Small Block Dice</option>
                                                                  <option>Small Box</option>
                                                                  <option>Small Brush</option>
                                                                  <option>Small Fish Curry (Kachki)</option>
                                                                  <option>Small Fish Curry (Kachki)</option>
                                                                  <option>small glass</option>
                                                                  <option>Small Multiple Necklaces Different Colors</option>
                                                                  <option>Small Necklace - Blue &amp; Yellow</option>
                                                                  <option>Small Necklace - Blue, Black &amp; With Diamond</option>
                                                                  <option>Small Necklace - Blue, Orange &amp; Red</option>
                                                                  <option>Small Necklace - Diamond Green</option>
                                                                  <option>Small Necklace - Green &amp; Blue</option>
                                                                  <option>Small Necklace - Green &amp; Red</option>
                                                                  <option>Small Necklace - Green, Blue &amp; Purple</option>
                                                                  <option>Small Necklace - Green, Blue, Yellow &amp; Purple</option>
                                                                  <option>Small Necklace - Red, Yellow &amp; Grey-White</option>
                                                                  <option>Small Necklace - Yellow, Blue, Green &amp; Purple</option>
                                                                  <option>Small Necklace - Yellow, Green &amp; Gold</option>
                                                                  <option>Small Necklace Multicolor</option>
                                                                  <option>Small Necklace Multicolor 2</option>
                                                                  <option>Small Necklace Multicolor 3</option>
                                                                  <option>Small Needle</option>
                                                                  <option>Small Spoon to mix colors</option>
                                                                  <option>Soap - Mini Lux soap</option>
                                                                  <option>Soap - Mini Lux soap </option>
                                                                  <option>Software Purchase</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box (Donation)</option>
                                                                  <option>Sound Box Big</option>
                                                                  <option>Sound Box Stand</option>
                                                                  <option>Sour yogurt (Tok Doi)</option>
                                                                  <option>Soyabin Oil</option>
                                                                  <option>Sponge</option>
                                                                  <option>Staff well being</option>
                                                                  <option>Stainer small Holes</option>
                                                                  <option>Stapler Machine</option>
                                                                  <option>Stapler Machine (Large)</option>
                                                                  <option>Stapler pin</option>
                                                                  <option>Steel Mazoni</option>
                                                                  <option>Steel scale  </option>
                                                                  <option>Sugar</option>
                                                                  <option>Sutli</option>
                                                                  <option>SYNTHETIC GUM</option>
                                                                  <option>Synthetic Rosin Adhesive</option>
                                                                  <option>SYNTHETIC TULI</option>
                                                                  <option>Tab</option>
                                                                  <option>Table Fan(small)</option>
                                                                  <option>Table Spoon</option>
                                                                  <option>Table-Round Glass</option>
                                                                  <option>Table-Round Glass</option>
                                                                  <option>Table-Round Glass</option>
                                                                  <option>Table-Round Glass</option>
                                                                  <option>Table-Round Glass</option>
                                                                  <option>Table-Round Glass</option>
                                                                  <option>Tailoring Chalk</option>
                                                                  <option>Tajpata</option>
                                                                  <option>Talapia Fish</option>
                                                                  <option>Tar Kata</option>
                                                                  <option>Tarcel - Joypuri </option>
                                                                  <option>Tarcel for necklace- Antique </option>
                                                                  <option>Tarmaric</option>
                                                                  <option>Tarmaric Powder</option>
                                                                  <option>TARPIN</option>
                                                                  <option>Tarpin oil</option>
                                                                  <option>Tealeaf</option>
                                                                  <option>Tej para / Bay leaf</option>
                                                                  <option>Telephone Bill</option>
                                                                  <option>Ten Station for Gym</option>
                                                                  <option>Tens</option>
                                                                  <option>TENS/MS station exercise machine </option>
                                                                  <option>Thread  - SundorI suta</option>
                                                                  <option>Thread - Ash Grey Shuta</option>
                                                                  <option>Thread - Badami Brown Shuta</option>
                                                                  <option>Thread - Black Shuta</option>
                                                                  <option>Thread - Blue Shuta</option>
                                                                  <option>Thread - China suta</option>
                                                                  <option>Thread - Golden Shuta</option>
                                                                  <option>Thread - Green Shuta</option>
                                                                  <option>Thread - Lemon Yellow Shuta</option>
                                                                  <option>Thread - Mouri Color Shuta</option>
                                                                  <option>Thread - Olive Shuta</option>
                                                                  <option>Thread - Orange Shuta</option>
                                                                  <option>Thread - Paste Color Shuta</option>
                                                                  <option>Thread - Pink Shuta</option>
                                                                  <option>Thread - Purple Shuta</option>
                                                                  <option>Thread - Red Shuta</option>
                                                                  <option>Thread - Silver Shuta</option>
                                                                  <option>Thread - Sky Blue Shuta</option>
                                                                  <option>Thread - White Shuta</option>
                                                                  <option>Thread - Yellow Shuta</option>
                                                                  <option>Thread Cutter</option>
                                                                  <option>Thread or Shuta</option>
                                                                  <option>Tiaz Patha</option>
                                                                  <option>tie</option>
                                                                  <option>Tip</option>
                                                                  <option>TISSUE CLOTH</option>
                                                                  <option>Tissue Cloth</option>
                                                                  <option>Tobala</option>
                                                                  <option>Tobala</option>
                                                                  <option>Toilet Tissue</option>
                                                                  <option>Tomato Sauce Pran (3kg))</option>
                                                                  <option>Towel</option>
                                                                  <option>Traction Bed with  Machine</option>
                                                                  <option>Traction machine with bed</option>
                                                                  <option>Trade Licence Renewal</option>
                                                                  <option>Training White Board</option>
                                                                  <option>Training White Board</option>
                                                                  <option>Training White Board (Donation)</option>
                                                                  <option>Training White Board Stand (Donation)</option>
                                                                  <option>TRANSPARENT PAPER</option>
                                                                  <option>Transtec Split AC 1.5 Ton</option>
                                                                  <option>Transtec Split AC 1.5 Ton</option>
                                                                  <option>Transtec Split AC 1.5 Ton</option>
                                                                  <option>Transtec Split AC 1.5 Ton</option>
                                                                  <option>Transtec Split AC 2.0 Ton</option>
                                                                  <option>Transtec Split AC 2.0 Ton</option>
                                                                  <option>Tread Mill Big (Donation)</option>
                                                                  <option>Tread Mill Big (Donation)</option>
                                                                  <option>Tread Mill Small</option>
                                                                  <option>Trolley</option>
                                                                  <option>Tuli</option>
                                                                  <option>Turmeric Powder</option>
                                                                  <option>Uike</option>
                                                                  <option>Ulta Red Radiation</option>
                                                                  <option>Ulta Sound Therapy</option>
                                                                  <option>Ultra red radiation</option>
                                                                  <option>Ultra Sound therapy</option>
                                                                  <option>Ultrasound  gel</option>
                                                                  <option>Umbrella</option>
                                                                  <option>UPS</option>
                                                                  <option>Urna Black</option>
                                                                  <option>Urna Blue</option>
                                                                  <option>Urna Chocolate Color</option>
                                                                  <option>Urna Golden</option>
                                                                  <option>Urna Green</option>
                                                                  <option>Urna Meroon</option>
                                                                  <option>Urna Paste Color</option>
                                                                  <option>Urna Pink</option>
                                                                  <option>Urna Red</option>
                                                                  <option>Urna Silver</option>
                                                                  <option>Urna Sky Blue</option>
                                                                  <option>Urna Violet</option>
                                                                  <option>Urna White</option>
                                                                  <option>Urna Yellow</option>
                                                                  <option>UTTORIYO</option>
                                                                  <option>Veg - Lemon</option>
                                                                  <option>Veg - Potatoes</option>
                                                                  <option>Vegetable</option>
                                                                  <option>Vehicle repair and maintenance</option>
                                                                  <option>Video and</option>
                                                                  <option>Video Editing</option>
                                                                  <option>Video game consular</option>
                                                                  <option>Vim Botal</option>
                                                                  <option>Vim Soap</option>
                                                                  <option>Voucher file</option>
                                                                  <option>Wall Fan</option>
                                                                  <option>Wastage newspaper</option>
                                                                  <option>Water bill to WASA</option>
                                                                  <option>water color</option>
                                                                  <option>WATER COLOUR</option>
                                                                  <option>Water Purifire</option>
                                                                  <option>Water Purifire</option>
                                                                  <option>Water Purifire</option>
                                                                  <option>Water Purifire</option>
                                                                  <option>Watermelon</option>
                                                                  <option>Wax Bath</option>
                                                                  <option>Wax bath with wax</option>
                                                                  <option>Weight Scale Carry</option>
                                                                  <option>Wheat Flour</option>
                                                                  <option>Wheel powder</option>
                                                                  <option>White Beads</option>
                                                                  <option>White EVA Sole</option>
                                                                  <option>White Foam 05 mm</option>
                                                                  <option>White Paste Block's chemical</option>
                                                                  <option>White Rope 0..50 cm thickness</option>
                                                                  <option>White Rope 0.25 cm thickness</option>
                                                                  <option>Whole Cumin</option>
                                                                  <option>WINDOWS SET UP</option>
                                                                  <option>wine glass</option>
                                                                  <option>Wood Spoon</option>
                                                                  <option>Wooden Dining Table</option>
                                                                  <option>Wooden Moti</option>
                                                                  <option>Wooden Round Table</option>
                                                                  <option>Wooden Round Table</option>
                                                                  <option>Wooden Round Table</option>
                                                                  <option>Wooden Shoe Rack </option>
                                                                  <option>Wooden Table For Students</option>
                                                                  <option>Wooden Table For Students</option>
                                                                  <option>Wooden Table For Students</option>
                                                                  <option>Wooden Table For Students</option>
                                                                  <option>Wooden Table For Students</option>
                                                                  <option>Wooden Table For Students</option>
                                                                  <option>Wooden Table For Students</option>
                                                                  <option>Wooden Table For Students Long</option>
                                                                  <option>Wooden Table Small</option>
                                                                  <option>Wooden Table Small</option>
                                                                  <option>Wooden Table Small</option>
                                                                  <option>Wooden Working Block Table</option>
                                                                  <option>Wooden Working Table</option>
                                                                  <option>Wooden Working Table</option>
                                                                  <option>Wooden Working Table</option>
                                                                  <option>Wooden Working Table</option>
                                                                  <option>Wooden Working Table</option>
                                                                  <option>Wooden Working Table</option>
                                                                  <option>Wooden Working Table</option>
                                                                  <option>Wooden Working Table</option>
                                                                  <option>Wooden Working Table Jewelry</option>
                                                                  <option>Wooden Working Table Jewelry</option>
                                                                  <option>Wooden Working Table Jewelry</option>
                                                                  <option>Wrapping Paper (printed)</option>
                                                                  <option>X Ray View Box</option>
                                                                  <option>X-ray view box</option>
                                                                  <option>XVR 08 Channel</option>
                                                                  <option>XVR Model-7232</option>
                                                                  <option>Yarn</option>
                                                                  <option>Yearly Staff Recreation Tour</option>
                                                                  <option>Yellow Block Paint</option>
                                                                  <option>Yoga Mat</option>
                                                                  <option>Zipper</option>
                                                                  <option>Zipper gait</option>
                                                                  <option>Zira Gora</option>
                                                                 </datalist>
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Type</h6>
                                                             </div>
                                                              <div class="col-8">
                                                               <select class="form-control select2 form-select">
                                                                 <option value="0">--Select-</option>
                                                                 <option value="1">Inventory item</option>
                                                                 <option value="2">Non-inventory item</option>
                                                                 <option value="3">Other charges</option>
                                                                 <option value="4">Sub total</option>
                                                                 <option value="5">Group</option>   
                                                                 <option value="6">Discount</option>
                                                                 <option value="7">Fixed asset</option> 
                                                                 <option value="8">Inhouse production</option>
                                                               </select>
                                                              </div>
                                                           </div>
                                                          <div class="row mb-4">
                                                             <div class="col-4 d-flex align-items-center">
                                                               <h6>Measurement</h6>
                                                             </div>
                                                              <div class="col-8">
                                                               <select class="form-control select2 form-select">
                                                                 <option value="0">--Select-</option>
                                                                 <option value="1">bottol</option>
                                                                 <option value="2">Bundle</option>
                                                                 <option value="3">Can</option>
                                                                 <option value="4">CAT Veg Portion</option>
                                                                 <option value="5">DAY</option>
                                                                 <option value="6">DOZEN</option>
                                                                 <option value="7">FUEL</option>
                                                                 <option value="8">GOJ</option>
                                                                 <option value="9">Gram</option>
                                                                 <option value="10">Kilogram</option>
                                                                 <option value="11">LINE</option>
                                                                 <option value="12">Litter</option>
                                                                 <option value="13">Meter</option>
                                                               </select>
                                                              </div>
                                                           </div>
                                                           <div class="row mb-4">
                                                            <div class="col-4 d-flex align-items-center">
                                                              <h6>Image</h6>
                                                            </div>
                                                             <div class="col-8">
                                                              <input type="file" class="form-control" id="horizontal-firstname-input" placeholder=" ">
                                                             </div>
                                                           </div>
                                                     </div>
                                                     </div>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="row mt-4 mb-4">
                                                <div class="col-4  d-flex">
                                                 <div> <h5>Is Sale Item</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                   </div>
                                                </div>
                                                <div class="col-4 d-flex">
                                                    <div><h5>Is Purchase Item</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                   </div>
                                                   </div>
                                                <div class="col-4 d-flex">
                                                  <div><h5>Is Expirable Item</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                                                </div>
                                                </div>
                                              </div>
                                              <div class="row mt-4 mb-4">
                                                <div class="col-6  d-flex align-items-center ">
                                                 <div> <h5>Sell Price</h5></div>
                                                    <div class="ms-5">
                                                    <input type="number" class="form-control" id="horizontal-firstname-input">
                                                   </div>
                                                </div>
                                                <div class="col-6 d-flex">
                                                    <div><h5>Cost Price</h5></div>
                                                </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-12 p-0">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title mb-4">Product BOM</h4>
                                                            <form class="repeater" enctype="multipart/form-data">
                                                                <div class="row">
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="name">SL</label>
                                                                        <label for="name">P. Category</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="product">Product</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="product">Measure Unit</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="quality">	Quantity</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="total">Price</label>
                                                                    </div>
                                                                    <div class="col-lg-2 p-0 pe-1">
                                                                        <label for="total">Cost Price</label>
                                                                    </div>
                                                                </div>
                                                                <div data-repeater-list="group-a">
                                                                    <div data-repeater-item class="row">
                
                                                                        <div  class="col-lg-2 d-flex p-0 pe-1 pb-1">
                                                                            <span class="pe-2 pb-1">01</span>
                                                                            <select id="formrow-inputState" class="form-select">
                                                                                <option value="">--Select--</option>
                                                                                <option value="1">Canteen Raw Material</option>
                                                                                <option value="1">Canteen Raw Material</option>
                                                                                <option value="1">Canteen Raw Material</option>
                                                                                <option value="1">Canteen Raw Material</option>
                                                                                <option value="1">Canteen Raw Material</option>
                                                                                <option value="1">Canteen Raw Material</option>
                                                                                <option value="1">Canteen Raw Material</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                            <select id="formrow-inputState" class="form-select">
                                                                                <option selected="">--Select--</option>
                                                                                <option value="1">Garbage Poly::1031</option>
                                                                                <option value="1">Hand Wash::1027</option>
                                                                                <option value="3">Napkin Tissue::1025</option>
                                                                                <option value="4">Savlon::1028</option>
                                                                                <option value="5">Vim Botal::1024</option>
                                                                            </select>
                                                                        </div>
                                                                        <div  class=" col-lg-2 p-0 pe-1 pb-1">
                                                                            <input type="text" class="form-control"/>
                                                                        </div>
                
                                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                            <input type="number"  class="form-control"/>
                                                                        </div>
                                                                        <div class=" col-lg-2 p-0 pe-1 pb-1">
                                                                            <input type="number"  class="form-control"/>
                                                                        </div>
                                                                        <div class="col-lg-2 p-0 pe-1 pb-1 align-self-center d-flex">
                                                                          <input type="number"  class="form-control"/>
                                                                            <button class="btn btn-danger ms-2">
                                                                                <i class="fas fa-trash-alt"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <input data-repeater-create type="button" class="btn btn-success mt-3 mt-lg-0" value="Add"/>
                                                            </form>
                                                            <!-- 7th row end  -->
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                              <div class="row mt-4 mb-4">
                                                <div class="col-6  d-flex justify-content-center">
                                                 <div> <h5>Sale price in Percent</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5" >
                                                   </div>
                                                </div>
                                                <div class="col-6 d-flex">
                                                  <div><h5>Is Active</h5></div>
                                                  <div class="form-check form-check-danger ms-5">
                                                    <input class="form-check-input" type="checkbox" id="formCheckcolor5">
                                                </div>
                                                </div>
                                              </div>
                                             </div>
                                             <div class="row d-flex justify-content-end mt-3">
                                              <div class="col-2">
                                                  <button class="btn btn-danger w-100" data-bs-dismiss="modal">reset</button>
                                              </div>
                                              <div class="col-2">
                                                  <button class="btn btn-success w-100">Save</button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                        </div>
                  </div>
                  <div class="tab-pane mt-4" id="profile" role="tabpanel">
                    <div class="row">         
                      <div class="col-md-2">
                          <div class="mb-3">        
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="mb-3 d-flex align-items-center">
                               <div class="p-0 me-2">
                                 <label for="formrow-password-input" class="form-label">Product Type:</label>
                               </div>
                               <div>
                                <select class="form-control">
                                  <option value="">Select Category</option>
                                  <option value="Service">Service</option>
                                  <option value="Inventory item">Inventory item</option>
                                  <option value="Non-inventory item">Non-inventory item</option>
                                  <option value="Other charges">Other charges</option>
                                  <option value="Sub total">Sub total</option>
                                  <option value="Group">Group</option>
                                  <option value="Discount">Discount</option>
                                  <option value="Fixed asset">Fixed asset</option>
                                  <option value="Inhouse production">Inhouse production</option>
                                </select>
                               </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="mb-3 d-flex align-items-center">
                               <div class="p-0 me-2">
                                <label for="formrow-password-input" class="form-label">Category:</label>
                               </div>
                                  <div>
                                    <select class="form-control"> 
                                      <option value="4 Water Purifier 6 Fire Exti">4 Water Purifier  6 Fire Exti</option>
                                      <option value="AC (11)">AC (11)</option>
                                      <option value="Angel Chef Hot Kitchen">Angel Chef Hot Kitchen</option>
                                      <option value="Anklet">Anklet</option>
                                      <option value="Annual Anniversary">Annual Anniversary</option>
                                      <option value="Annual Anniversary of PFDA - V">Annual Anniversary of PFDA - V</option>
                                      <option value="antivirus">antivirus</option>
                                      <option value="Application Development">Application Development</option>
                                      <option value="Art Finished Goods">Art Finished Goods</option>
                                      <option value="Art Raw Materials">Art Raw Materials</option>
                                      <option value="Art Training Materials">Art Training Materials</option>
                                      <option value="Asus Laptop">Asus Laptop</option>
                                      <option value="Attend meetings, Workshop, Sem">Attend meetings, Workshop, Sem</option>
                                      <option value="BAKERY">BAKERY</option>
                                      <option value="Bakery assets">Bakery assets</option>
                                      <option value="Bakery Equipment">Bakery Equipment</option>
                                      <option value="Bakery finish products">Bakery finish products</option>
                                      <option value="Bakery Logistic Materials">Bakery Logistic Materials</option>
                                      <option value="Bakery Raw Materials">Bakery Raw Materials</option>
                                      <option value="Bakery vegetable">Bakery vegetable</option>
                                      <option value="Banner and Brochure">Banner and Brochure</option>
                                      <option value="Banner Stand">Banner Stand</option>
                                      <option value="Barmis Juta">Barmis Juta</option>
                                      <option value="Block Finished Goods">Block Finished Goods</option>
                                      <option value="Block Raw Materials">Block Raw Materials</option>
                                      <option value="Book">Book</option>
                                      <option value="Boost  Notice">Boost  Notice</option>
                                      <option value="Boost Notice">Boost  Notice</option>
                                      <option value="Boost  other cost">Boost  other cost</option>
                                      <option value="Canteen Finished Goods">Canteen Finished Goods</option>
                                      <option value="Canteen Raw Material">Canteen Raw Material</option>
                                      <option value="Carton">Carton</option>
                                      <option value="Communication">Communication</option>
                                      <option value="Computer  Allied">Computer  Allied</option>
                                      <option value="COMPUTER TRAINING">COMPUTER TRAINING</option>
                                      <option value="Crafts">Crafts</option>
                                      <option value="Crest">Crest</option>
                                      <option value="Cultural Instruments">Cultural Instruments</option>
                                      <option value="Dance Dress">Dance Dress</option>
                                      <option value="Dance props">Dance props</option>
                                      <option value="Decoration">Decoration</option>
                                      <option value="Dinning Table">Dinning Table</option>
                                      <option value="Drama Dress">Drama Dress</option>
                                      <option value="Drama Props">Drama Props</option>
                                      <option value="Educational Equipment">Educational Equipment</option>
                                      <option value="Electric Work">Electric Work</option>
                                      <option value="Equipment Repair  Maintenance">Equipment Repair  Maintenance</option>
                                      <option value="Facebook Boost Up">Facebook Boost Up</option>
                                      <option value="Food bill">Food bill</option>
                                      <option value="Food Ingredients Canteen">Food Ingredients Canteen</option>
                                      <option value="Furniture">Furniture</option>
                                      <option value="Furniture  Fixture Repair  M">Furniture  Fixture Repair  M</option>
                                      <option value="General Admin">General Admin</option>
                                      <option value="Gift items">Gift items</option>
                                      <option value="Gym and sports Equipment">Gym and sports Equipment</option>
                                      <option value="Home Visit">Home Visit</option>
                                      <option value="Huawei Media Pad">Huawei Media Pad</option>
                                      <option value="ID Card">ID Card</option>
                                      <option value="Ikebana Finished Goods">Ikebana Finished Goods</option>
                                      <option value="Ikebana Raw Materials">Ikebana Raw Materials</option>
                                      <option value="Jewelerry Raw Materials">Jewelerry Raw Materials</option>
                                      <option value="Jewelry Finished Goods">Jewelry Finished Goods</option>
                                      <option value="Karishma">Karishma</option>
                                      <option value="Kitchen Equipment  Crockeries">Kitchen Equipment  Crockeries</option>
                                      <option value="Lax Mini Sope">Lax Mini Sope</option>
                                      <option value="Liason with GoB institutes, UN">Liason with GoB institutes, UN</option>
                                      <option value="Logistc Matrial">Logistc Matrial</option>
                                      <option value="Logistc Matrial">Logistc Matrial</option>
                                      <option value="Maintenance">Maintenance</option>
                                      <option value="Maintenance (AS)">Maintenance (AS)</option>
                                      <option value="MARKETING(BOOST)">MARKETING(BOOST)</option>
                                      <option value="Mask Raw Materials">Mask Raw Materials</option>
                                      <option value="MATERIAL">MATERIAL</option>
                                      <option value="Medicine">Medicine</option>
                                      <option value="Mobile Bill">Mobile Bill</option>
                                      <option value="Muph Suta">Muph Suta</option>
                                      <option value="Music Equipment">Music Equipment</option>
                                      <option value="Office equipment  Machinery">Office equipment Machinery</option>
                                      <option value="Office Repair  Maintenance">Office Repair  Maintenance</option>
                                      <option value="Online Sales Promotion">Online Sales Promotion</option>
                                      <option value="Operating Expenses">Operating Expenses</option>
                                      <option value="Operating Expenses - Phy">Operating Expenses - Phy</option>
                                      <option value="Operating Expenses - Psy">Operating Expenses - Psy</option>
                                      <option value="Organizational Exposure Event">Organizational Exposure Event</option>
                                      <option value="Organize Training for parents ">Organize Training for parents </option>
                                      <option value="Others Maintenance">Others Maintenance</option>
                                      <option value="Paperwork Finished Goods">Paperwork Finished Goods</option>
                                      <option value="Paperwork Raw Materials">Paperwork Raw Materials</option>
                                      <option value="Participation of Mela">Participation of Mela</option>
                                      <option value="Photo Printing">Photo Printing</option>
                                      <option value="Photocopy Machine  Printer">Photocopy Machine  Printer</option>
                                      <option value="Physiotherapy">Physiotherapy</option>
                                      <option value="Pre-Vocational">Pre-Vocational</option>
                                      <option value="Printings Items">Printings Items</option>
                                      <option value="Program">Program</option>
                                      <option value="Proposal Development (Hard Cop">Proposal Development (Hard Cop</option>
                                      <option value="Psychology">Psychology</option>
                                      <option value="Raw materials (Carpet slipper">Raw materials (Carpet slipper</option>
                                      <option value="Raw materials (Coushan Cover p">Raw materials (Coushan Cover p</option>
                                      <option value="Raw materials (Door mat prod.)">Raw materials (Door mat prod.)</option>
                                      <option value="Raw materials (Shopping bag pr">Raw materials (Shopping bag pr</option>
                                      <option value="Raw materials (Table mat prod.">Raw materials (Table mat prod.</option>
                                      <option value="Renovation Work">Renovation Work</option>
                                      <option value="Rental Expenses">Rental Expenses</option>
                                      <option value="Room Decoration">Room Decoration</option>
                                      <option value="Room Maintenance">Room Maintenance</option>
                                      <option value="Security equipment">Security equipment</option>
                                      <option value="Security SurBalance">Security SurBalance</option>
                                      <option value="Sensory equipment">Sensory equipment</option>
                                      <option value="Servicing">Servicing</option>
                                      <option value="Servicing - Selling (A C)">Servicing - Selling (A C)</option>
                                      <option value="Software and patent">Software and patent</option>
                                      <option value="Staff Annual Refreshment">Staff Annual Refreshment</option>
                                      <option value="Staff Annual Refreshment">Staff Annual Refreshment</option>
                                      <option value="Stationary">Stationary</option>
                                      <option value="Stationary_2">Stationary_2</option>
                                      <option value="Surveillance Equipments">Surveillance Equipments</option>
                                      <option value="Tailoring Equipment">Tailoring Equipment</option>
                                      <option value="Tailoring Finished Goods">Tailoring Finished Goods</option>
                                      <option value="Tailoring raw material">Tailoring raw material</option>
                                      <option value="Therapy Equipment">Therapy Equipment</option>
                                      <option value="Tie-Dye Finished Goods">Tie-Dye Finished Goods</option>
                                      <option value="Tie-dye Raw Materials">Tie-dye Raw Materials</option>
                                      <option value="Training Educational Equipment">Training  Educational Equipment</option>
                                      <option value="UTILITY">UTILITY</option>
                                      <option value="Vehicle (Automobile)">Vehicle (Automobile)</option>
                                      <option value="Video  and Photo Graphic">Video  and Photo Graphic</option>
                                      <option value="Visa fee">Visa fee</option>
                                      <option value="Well being">Well being</option>
                                      <option value="windows set up">windows set up</option>
                                      <option value="Yearly Staff Recreation Tour">Yearly Staff Recreation Tour</option>

                                   </select>
                                  </div>
                           </div>
                      </div>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive w-100">
                      <thead>
                          <tr>
                              <th>Code</th>
                              <th>Name</th>
                              <th>Type</th>
                              <th>Category</th>
                              <th>Measurement</th>
                              <th>Sell Price</th>
                              <th>Cost Price</th>
                              <th>Log</th>
                              <th>action</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>System </td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011</td>
                              <td>$320,</td>
                              <td>61</td>
                              <td>2011/</td>
                              <td>$320,</td>   
                              <td>
                                  <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                      <i class="mdi mdi-pencil"></i>
                                  </button>
                              </td>
                          </tr>
                          <tr>
                              <td>Puja </td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>20115</td>
                              <td>$170</td>
                              <td>61</td>
                              <td>2011/</td>
                              <td>
                                      <button type="button" class="btn btn-sm btn-success btn-rounded waves-effect waves-light mb-2 me-1">
                                          <i class="mdi mdi-pencil"></i>
                                      </button>
                              </td>
                          </tr>
                      </tbody>
                  </table>
             
                  </div>
              </div>     
          </div>
      </div>
  </div>
</div>
@endsection
@section('script')
   <!-- form advanced init -->
   <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

   <!-- form repeater js -->
   <script src="{{ URL::asset('/assets/libs/jquery-repeater/jquery-repeater.min.js') }}"></script>

   <script src="{{ URL::asset('/assets/js/pages/form-repeater.int.js') }}"></script>


   <!-- Required datatable js -->
   <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
   <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
   <!-- Datatable init js -->
   <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

   <!-- Responsive Table js -->
   <script src="{{ URL::asset('/assets/libs/rwd-table/rwd-table.min.js') }}"></script>

   <!-- Init js -->
   <script src="{{ URL::asset('/assets/js/pages/table-responsive.init.js') }}"></script>

   <!-- Table Editable plugin -->
   <script src="{{ URL::asset('/assets/libs/table-edits/table-edits.min.js') }}"></script>

   <script src="{{ URL::asset('/assets/js/pages/table-editable.int.js') }}"></script>

   <!-- Sweet Alerts js -->
   <script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

   <!-- Sweet alert init js-->
   <script src="{{ URL::asset('/assets/js/pages/sweet-alerts.init.js') }}"></script>

@endsection