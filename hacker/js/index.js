$(function () {
    $('.content .item .left').height(innerHeight - $('.header').height() + 'px')
    $('.content .item .left textarea').height(innerHeight - $('.header').height() - $('.content .item h2').height() - 100 + 'px')
    $('.nav li').click(function () {
        $('.content .item').eq($(this).index()).addClass('active').siblings().removeClass('active');
    })
    $('.fliter .button').click(function () {
        fliter($('#domains'));
        layer.msg('过滤成功!', {icon: 6});
    })
    $('.result .creatUrl').click(function () {
        creatUrl();
        layer.msg('生成Url成功!', {icon: 6});
    })
    $('.result .uniq').click(function () {
        fliter($('#result'));
        layer.msg('去除重复成功!', {icon: 6});
    })
    $('.copy').click(function () {
        clipboard.copy($('.result #result').val());
        layer.msg('复制成功!', {icon: 6});
    })
})

function creatUrl() {
    domains = $('#domains').val() //replace(/http:\/\//g, "");
    domains = domains.split(/\n/g);
    domains = _.uniq(domains);
    suffix = $('#suffix').val().split(/\n/g);
    suffix = _.uniq(suffix);
    scanName =$('#scanName').val().split(/\n/g)
    result = ''
    suffixLen = suffix.length
    scanNameLen =scanName.length
    domainsLen=domains.length
    for (i =0; i < suffixLen; i++) {
        for (x =0; x < scanNameLen; x++) {
            for (j =0;j <domainsLen; j++) {
                result = result +'http://'+ resultSuffix(scanName[x], domains[j]) + '.' + suffix[i] + '\n'
            }
        }
    }
    $('#result').val(result);

}

function fliter(node) {
    var domains = node.val();
    var fliter = $('#fliter').val();
    // domains = domains.replace(/http:\/\//g, "");
    fliter = fliter.replace(/\./g, "\\.");
    fliter = fliter.replace(/\*/g, "\.*");
    fliter = fliter.split(/\n/g);
    fliter = _.uniq(fliter);
    for (i = fliter.length - 1; i >= 0; i--) {
        domains = domains.replace(eval('/' + fliter[i] + '/g'), '');
    }
    domains = domains.split(/\n/g);
    domains = _.toString(_.uniq(domains));
    domains = domains.replace(/,/g, "\n");
    //delete blank
    domains = domains.replace(/^\s+|\s+$/gm, '');
    node.val(domains);
}

function resultSuffix(suffix, domain) {
    left = domain.split('.')[0]
    center = domain.split('.')[1]
    right = domain.split('.')[2]
    suffix = suffix.replace(/\#left\#/g, left)
    suffix = suffix.replace(/\#center\#/g, center)
    suffix = suffix.replace(/\#right\#/g, right)
    return domain + '/' + suffix;
}

function pathSuffix(suffix, domain) {
    domain = domain.split('/')
    if ('' == domain[domain.length - 1]) {
        domain.splice(domain.length - 1, 1)
    }
    domain = _.toString(domain)
    domain = domain.replace(',', '/')
    return domain + '.' + suffix;
}
