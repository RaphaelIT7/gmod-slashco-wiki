<function name="IsKeyPressed" parent="SlashCo" type="libraryfunc">
	<description>
		Looks up the current <page>BUTTON_CODE</page> for the given bind and compares it against the given button
	</description>
	<realm>Shared</realm>
	<group>Keyboard</group>
	<args>
		<arg name="name" type="string">Bind</arg>
		<arg name="ply" type="Player">
			On the Server this is the player which bindings should be used when checking.<br>
			On the client this is unused / can be `nil`<br>
		</arg>
		<arg name="button" type="BUTTON_CODE">Button to check</arg>
	</args>
	<rets>
		<ret name="pressed" type="boolean">Returns `true` if the given button matches the current bind key</ret>
	</rets>
</function>

<example>
	<description>Checking if the ping bind was pressed</description>
	<code>
hook.Add("PlayerButtonDown", "Example", function(ply, key)
	-- Check if PING bind was pressed
	if not SlashCo.IsKeyPressed("PING", ply, key) then return end
	
	if SERVER then
		ply:SurvivorPing() -- Do ping (but this function is only serverside)
	end
end)
	</code>
</example>