<function name="BroadcastAnnouncement" parent="SlashCo" type="libraryfunc">
	<description>
		Broadcasts an announcement
	</description>
	<realm>Server</realm>
	<args>
		<arg name="text" type="string">Text to display</arg>
		<arg name="time" type="number" default="nil">Time to display. If `nil` it will calculate a time based off the text length</arg>
		<arg name="target" type="Player|Table" default="nil">A specific player / table of players to target. If `nil` then it is sent to everyone</arg>
	</args>
</function>