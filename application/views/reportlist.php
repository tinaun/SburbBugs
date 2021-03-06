<!doctype html>
<html>
    <head>
        <title>Bug Report List</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>IP Address</th>
                    <th>Browser</th>
                    <th>OS</th>
                    <th>Referrer</th>
                    <th>Report</th>
                    <th></th>
                </tr>
            <thead>
            <tbody>
<?php foreach($reports as $report) { ?>
                <tr>
                    <td><?php echo $report->id; ?></td>
                    <td><?php echo anchor("/report/listing/?ip=".urlencode(htmlspecialchars($report->ip)), htmlspecialchars($report->ip)); ?></td>
                    <td><?php echo anchor("/report/listing/?browser=".urlencode(htmlspecialchars($report->browser)), htmlspecialchars($report->browser)); ?></td>
                    <td><?php echo anchor("/report/listing/?os=".urlencode(htmlspecialchars($report->os)), htmlspecialchars($report->os)); ?></td>
                    <td><?php echo anchor("/report/listing/?referrer=".urlencode(htmlspecialchars($report->referrer)), htmlspecialchars($report->referrer)); ?></td>
                    <td><?php echo htmlspecialchars($report->report); ?></td>
                    <td><a href="/report/view/<?php echo $report->id; ?>">View</a></td>
                </tr>
<?php } ?>
            </tbody>
        </table>
    </body>
</html>