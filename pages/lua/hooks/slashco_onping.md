<function name="SlashCo:OnPing" parent="" type="hook">
	<description>
		Called whenever a ping is created, both serverside (right after building the ping info to send to clients) and clientside (right after receiving a ping over the network).<br>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="pingInfo" type="table">Information about the ping (type, position, owning player/entity, team, expiry, etc.)</arg>
	</args>
	<rets>
		<ret name="skipSound" type="boolean" optional>Return `true` to suppress the ping notification sound.</ret>
	</rets>
</function>
