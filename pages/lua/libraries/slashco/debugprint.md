<function name="DebugPrint" parent="SlashCo" type="libraryfunc">
	<description>
		Prints `msg` to the server console, prefixed with `[SlashCo - Debug]`.<br>
		Unlike some other debug helpers in the codebase, this always prints and is not gated behind any ConVar or debug flag.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="msg" type="string">The message to print.</arg>
		<arg name="..." type="any" optional>Additional values appended to the printed line.</arg>
	</args>
</function>