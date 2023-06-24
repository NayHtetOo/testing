<div>
    <table>
        <thead>
            <tr>
                <th rowspan="4">စဥ်</th>
                <th rowspan="4" colspan="3" style="width: 200px;">အကြောင်းအရာ</th>
                <th rowspan="4">တစ်တန် စျေးနှုန်း</th>
                <th colspan="12">Shore Tank လက်ကျန်</th>
                <th colspan="6" rowspan="3">စုစုပေါင်းစာရင်းပိတ်လက်ကျန်</th>
                <th rowspan="3">မှတ်ချက်</th>
            </tr>
            <tr>
                <th colspan="2" style="width: 80px;">Wilmar</th>
                <th style="width: 80px;">HOB</th>
                <th style="width: 80px;">HTOO</th>
                <th colspan="2" style="width: 80px;">KIP</th>
                <th style="width: 80px;">MNG1</th>
                <th style="width: 80px;">MNG2</th>
                <th colspan="2" style="width: 80px;">DD</th>
                <th style="width: 80px;">MEC (RED)</th>
                <th style="width: 80px;">MEC (WHITE)</th>
            </tr>
            <tr>
                <th colspan="2" style="width: 80px;">25200</th>
                <th style="width: 80px;">3800</th>
                <th style="width: 80px;">3800</th>
                <th colspan="2" style="width: 80px;">3800</th>
                <th style="width: 80px;">3800</th>
                <th style="width: 80px;">3800</th>
                <th colspan="2" style="width: 80px;">3800</th>
                <th style="width: 80px;">3800</th>
                <th style="width: 80px;">3800</th>
            </tr>
            <tr>
                <th style="width: 80px;">ဈေးကွက်</th>
                <th style="width: 80px;">စာရင်းပြောင်း</th>
                <th style="width: 80px;">စျေးကွက်</th>
                <th style="width: 80px;">စျေးကွက်</th>
                <th style="width: 80px;">စျေးကွက်</th>
                <th style="width: 80px;">အခြားသုံး</th>
                <th style="width: 80px;">စျေးကွက်</th>
                <th style="width: 80px;">စျေးကွက်</th>
                <th style="width: 80px;">စျေးကွက်</th>
                <th style="width: 80px;">စာရင်းပြောင်း</th>
                <th style="width: 80px;">စျေးကွက်</th>
                <th style="width: 80px;">-</th>

                <th style="width: 80px;">စျေးကွက်</th>
                <th style="width: 80px;">စာရင်းပြောင်း</th>
                <th style="width: 80px;">ဈေးကွက် ဖြန့်ဖြူးရန် ပေါင်း</th>
                <th style="width: 80px;">ဖူလုံရက်/ ကာလ</th>
                <th style="width: 80px;">အခြားသုံး</th>
                <th style="width: 80px;">ပေါင်း</th>
                <th style="width: 80px;">-</th>
            </tr>

            <tr>
                <th></th>
                <th colspan="3">'21-5-2023 ရက်နေ့လက်ကျန်</th>
                <th></th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">6157.211</th>
                <th style="width: 80px;">-</th>
                <th style="width: 80px;">6157.211</th>
                <th>-</th>
                <th style="width: 80px;">14710.72</th>
                <th style="width: 80px;">14710.72</th>
                <th style="width: 80px;">14710.72</th>
                <th style="width: 80px;">14710.72</th>
                <th style="width: 80px;">14710.72</th>
                <th style="width: 80px;">14710.72</th>
                <th style="width: 80px;">-</th>
            </tr>
            <tr>
                <th colspan="22">ယခင် FESC အစည်းအဝေးများမှ ခွင့်ပြုပြီး ရောက်ရှိရန် သင်္ဘောများ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
            <tr>
                @foreach ($d as $value)
                    <td>{{ $value }}</td>
                @endforeach
                {{-- <td>{{ $d->id }}</td>
                <td>{{ $d->name }}</td>
                <td>{{ $d->email }}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
