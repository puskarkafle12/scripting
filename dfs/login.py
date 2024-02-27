def login(username,password):
    import requests
    
    headers = {
    'Accept': 'application/json, text/plain, */*',
    'Accept-Language': 'en-US,en;q=0.9',
    'Connection': 'keep-alive',
    'If-None-Match': 'W/"1b7b-HEZmf69IIxiB3FHnj+bK6CM1/II"',
    'Origin': 'https://dfs.deerhold.com',
    'Referer': 'https://dfs.deerhold.com/',
    'Sec-Fetch-Dest': 'empty',
    'Sec-Fetch-Mode': 'cors',
    'Sec-Fetch-Site': 'same-site',
    'User-Agent': 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36',
    'sec-ch-ua': '"Chromium";v="122", "Not(A:Brand";v="24", "Google Chrome";v="122"',
    'sec-ch-ua-mobile': '?0',
    'sec-ch-ua-platform': '"macOS"',
}


    json_data = {
        'username': username,
        'password': password,
    }

    response = requests.post('https://dfs-api.deerhold.com/api/v1/auth/login', headers=headers, json=json_data)
    headers['Authorization']="Bearer "+response.json().get('data').get('access_token')

    return headers