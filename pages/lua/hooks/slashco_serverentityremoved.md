<function name="SlashCo:ServerEntityRemoved" parent="" type="hook">
	<description>
		Called when the server notifies the client that an entity was removed, via the `SlashCo:EntityRemoved` net message.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="entIndex" type="number">The entity index of the removed entity</arg>
	</args>
</function>
