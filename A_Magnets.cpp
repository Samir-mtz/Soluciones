#include <bits/stdc++.h>
using namespace std;
int main(){
    ios::sync_with_stdio(false);
    cin.tie(nullptr);
    cout.tie(nullptr);
    int n, cont;
    cin>>n;
    string prev_iman="";
    while(n--){
        string iman;
        cin>>iman;
        cont += iman != prev_iman ? 1 : 0;
        prev_iman = iman;
    }
    cout<<cont;
return 0;
}